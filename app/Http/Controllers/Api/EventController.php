<?php

namespace App\Http\Controllers\Api;

use App\Exceptions\ActivityMaximumReservationsReachedException;
use App\Exceptions\EventDayMaximumReservationsReachedException;
use App\Exceptions\OverlappingPeriodException;
use App\Facade\EventDayServiceFacade;
use App\Http\Controllers\Controller;
use App\Http\Requests\Api\EventRegisterRequest;
use App\Models\Activity;
use App\Models\EventDay;
use App\Models\User;
use App\Transformers\EventTransformer;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Optional;
use Spatie\Fractal\Fractal;
use Throwable;

class EventController extends Controller {
    /**
     * Lists all events and return their representation, via Fractal's auto `include` features via this endpoint
     * activities can be easily retrieved.
     *
     * EXAMPLE:
     * <code>
     *      <endpoint> -> returns all events
     *      <endpoint>?include=activities -> returns all events and activities for each event
     * </code>
     *
     * @return JsonResponse
     */
    public
    function index(): JsonResponse {
        return Fractal::success()
                      ->collection(
                          EventDay::query()
                                  ->groupBy("date")
                                  ->orderBy("location")
                                  ->get(),
                          EventTransformer::class,
                      )
                      ->respond();
    }

    /**
     * Handle the reservation request of a user
     *
     * @param EventRegisterRequest $request
     *
     * @return RedirectResponse
     * @throws OverlappingPeriodException
     * @throws ModelNotFoundException
     * @throws ActivityMaximumReservationsReachedException
     * @throws EventDayMaximumReservationsReachedException
     * @throws Throwable
     */
    public
    function reserve(
        EventRegisterRequest $request,
    ): RedirectResponse {
        // TODO: currently absences are untracked, tracking them as reservations will make them count in the overall
        //  total by default.
        //  Available options are:
        //      - Track them in a table
        //      - Scope the query for the Reservation model
        /** @var User $current_user */
        $current_user = $request->user();

        // in order to grant data consistency run everything in a DB transaction, if something fail nothing will be
        // recorded
        DB::transaction(
            function() use ($current_user, $request) {
                // drop all previous reservations if this method is called again
                $current_user->reservations()->delete();

                foreach ($request->get("reservations") as $reservation) {
                    /** @var array{date: string, location: string, absent: Optional|bool, activity_reservations: Optional|string[]} $reservation */

                    if (Arr::has(
                        $reservation,
                        "absent",
                    )) {
                        // TODO: handle the user stating he'll be absent for a given day, at the moment this is a nop
                        continue;
                    }

                    // as the reservation array has no "absent" key here it MUST have an "activity_reservations" key

                    // try to find the EventDay given its identification pair: data-location, if not found fails
                    $event_day = EventDayServiceFacade::getReservableEventFromIdentificationPair(
                        $reservation["date"],
                        $reservation["location"],
                    );

                    // create the activity collection from their ids, we proceed to extract each activity associating it with
                    // the event day, if not found this means that the activity does not belong to the event day - then fail
                    $activities = EventDayServiceFacade::validateActivitiesDoNotOverlap(
                        $reservation["activity_reservations"],
                        $event_day,
                    );

                    foreach ($activities as $activity) {
                        /** @var Activity $activity */
                        // if the reservation for the given activity exceed the maximum fail
                        throw_unless(
                            EventDayServiceFacade::canReserveASpot($activity),
                            ActivityMaximumReservationsReachedException::class,
                            $activity,
                        );

                        // record the reservation and continue
                        $current_user->reservations()->create(
                            [
                                "event_day_id" => $event_day->id,
                                "activity_id"  => $activity->id,
                            ],
                        );
                    }
                }
            },
        );

        // avoid recreating the response with reservation included, instead prefer the return of the whole user object
        // with the linked reservations
        return redirect()->route(
            "user.me",
            ["include" => "reservations"],
        );
    }
}
