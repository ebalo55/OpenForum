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
use App\Transformers\UserTransformer;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Optional;
use Illuminate\Support\Str;
use Knuckles\Scribe\Attributes\ResponseFromFile;
use Spatie\Fractal\Fractal;
use Throwable;

/**
 * @group Events interactions
 *
 * Activities related to the interaction of the currently authenticated user with events
 */
class EventController extends Controller {
    /**
     * Events index
     *
     * Lists all events and optionally on or many of their relations.
     *
     * @param Request $request
     *
     * @return JsonResponse
     *
     * @responseField data object[] Container for resources.
     * @responseField data.type string Resource return type as of JSON:API standard, always equal to `event_day`.
     * @responseField data.id string Resource unique identifier, always starts with `evt_`.
     * @responseField data.attributes object Resource attributes container.
     * @responseField data.attributes.available_reservations string Number of available reservation spot for the event.
     * @responseField data.attributes.date string Event date, formatted as day/month/year.
     * @responseField data.attributes.location string Event location.
     * @responseField data.relationships ?object Wrapper for included relationships.
     * @responseField data.relationships.reservations ?object Wrapper for reservations identification data.
     * @responseField data.relationships.reservations.data object[] Reservations identifier data container.
     * @responseField data.relationships.reservations.data[].type string Resource return type as of JSON:API standard,
     *                always equal to `reservation`
     * @responseField data.relationships.reservations.data[].id string Resource unique identifier, always starts with
     *                `resrv_`.
     * @responseField data.relationships.activities ?object Wrapper for activities identification data.
     * @responseField data.relationships.activities.data object[] Activities identifier data container.
     * @responseField data.relationships.activities.data[].type string Resource return type as of JSON:API standard,
     *                always equal to `activity`
     * @responseField data.relationships.activities.data[].id string Resource unique identifier, always starts with
     *                `act_`.
     * @responseField included ?object[] Container for included relationships.
     * @responseField included[].type string Resource return type as of JSON:API standard.
     * @responseField included[].id string Resource unique identifier.
     * @responseField included[].attributes object Resource attributes container.
     * @responseField meta object Container for metadata.
     * @responseField meta.success boolean Response status summary, if `true` the call was successful.
     * @responseField meta.errors null|object[] If one or more errors occur this field will be filled with errors.
     * @responseField meta.errors[].reference_code int Error reference code for easy front-end retrieval.
     * @responseField meta.errors[].field null|string If an error occur linked to a form field this field will handle
     *                the field name the error references to.
     * @responseField meta.errors[].message string|string[] The error message(s).
     */
    #[ResponseFromFile("storage/responses/api.events.index.json")]
    public
    function index(
        Request $request,
    ): JsonResponse {
        return Fractal::success()
            ->collection(
                EventDay::query()
                    ->groupBy(
                        "id",
                        "date",
                    )
                    ->orderBy("date")
                    // eager load activities relation and sort activities by starting date if the include
                    // parameter exists and it contains the relation name
                    ->when(
                        Str::contains(
                            $request->get(
                                "include",
                                "",
                            ),
                            "activities",
                        ),
                        fn(Builder $builder) => $builder->setEagerLoads(
                            [
                                "activities" => fn(HasMany $builder) => $builder->orderBy(
                                    "activities.starting_at",
                                ),
                            ],
                        ),
                    )->get(),
                EventTransformer::class,
                "event_day",
            )
            ->respond();
    }

    /**
     * Reserve spots
     *
     * Handle the reservation request of a user reserving the provided spots
     * <aside class="notice">
     *      This call must be executed using the logged-in user token in order to subscribe the user.
     *      The authentication token will the ALWAYS be different from the authorization token used to retrieve the
     *      data and authenticate the user.
     * </aside>
     *
     * @param EventRegisterRequest $request
     *
     * @return JsonResponse
     * @throws OverlappingPeriodException
     * @throws ModelNotFoundException
     * @throws ActivityMaximumReservationsReachedException
     * @throws EventDayMaximumReservationsReachedException
     * @throws Throwable
     *
     * @bodyParam     reservations object[] required Contains the reservation preferences of the user. Must contain
     *                exactly the same number of objects as the event days. No-example
     * @bodyParam     reservations[].date string required Must be a valid date in the format `day/month/year`, together
     *                with the date uniquely identifies the event day. Example: 18/02/2023
     * @bodyParam     reservations[].location string required Must be a valid location, together with the date uniquely
     *                identifies the event day. Example: Florence
     * @bodyParam     reservations[].absent bool Required if `activity_reservations` is not provided, states that a
     *                user
     *                will not participate in the event in a given day, can be `true`/`false` but only true-ish value
     *                is
     *                significant. Example: false
     * @bodyParam     reservations[].activity_reservations string[] Required if `absent` is not provided or is falsy,
     *                defines the list of activities identifier a user want to reserve for a given day. All activities
     *                must exist in the unique date-location pair. Example: ["act_b9f4d227bcfb49f79e1481e3f2e7d893",
     *                "act_5c2eefd3bf814837b81eba07769121d3"]
     *
     * @responseField data object Container for resource.
     * @responseField data.type string Resource return type as of JSON:API standard, always equal to `user`.
     * @responseField data.id string Resource unique identifier, always starts with `usr_`.
     * @responseField data.attributes object Resource attributes container.
     * @responseField data.attributes.name string Current user full name.
     * @responseField data.attributes.email string Current user censored email.
     * @responseField data.attributes.email_verified_at ?string Email verification datetime or null, if this field is
     *                null for a given user he won't be allowed to reserve any spot.
     * @responseField data.attributes.token string Current user authentication token.
     * @responseField data.relationships object Wrapper for included relationships.
     * @responseField data.relationships.reservations object Wrapper for reservation identification data.
     * @responseField data.relationships.reservations.data object[] Reservations identifier data container.
     * @responseField data.relationships.reservations.data[].type string Resource return type as of JSON:API standard,
     *                always equal to `reservation`
     * @responseField data.relationships.reservations.data[].id string Resource unique identifier, always starts with
     *                `resrv_`.
     * @responseField included object[] Container for included relationships.
     * @responseField included[].type string Resource return type as of JSON:API standard.
     * @responseField included[].id string Resource unique identifier.
     * @responseField included[].attributes object Resource attributes container.
     * @responseField meta object Container for metadata.
     * @responseField meta.success boolean Response status summary, if `true` the call was successful.
     * @responseField meta.errors null|object[] If one or more errors occur this field will be filled with errors.
     * @responseField meta.errors[].reference_code int Error reference code for easy front-end retrieval.
     * @responseField meta.errors[].field null|string If an error occur linked to a form field this field will handle
     *                the field name the error references to.
     * @responseField meta.errors[].message string|string[] The error message(s).
     */
    #[ResponseFromFile("storage/responses/user.me.json", description: "Reservation successful")]
    #[ResponseFromFile("storage/responses/error.json", status: 409, description: "One or more conflicts arised while reserving")]
    #[ResponseFromFile("storage/responses/error.json", status: 404, merge: [
        "meta" => [
            "errors" => [
                "reference_code" => 0,
                "field"          => null,
                "message"        => "No query results for model <model-name>",
            ],
        ],
    ], description: "Event/Activity not found")]
    public
    function reserve(
        EventRegisterRequest $request,
    ): JsonResponse {
	    // TODO: currently absences are untracked, tracking them as reservations will make them count in the overall
	    //  total by default.
	    //  Available options are:
	    //      - Track them in a table
	    //      - Scope the query for the Reservation model
	    /** @var User $current_user */
	    $current_user = $request->user();

	    EventDayServiceFacade::isRegistrationEnabled();

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
        return Fractal::success()
            ->parseIncludes("reservations")
            ->item(
                $current_user,
                UserTransformer::class,
                "user",
            )->respond();
    }
}
