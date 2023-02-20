<?php

namespace App\Service;

use App\Contracts\ReservableModelContract;
use App\Enum\DatetimeFormatVariation;
use App\Exceptions\EventDayMaximumReservationsReachedException;
use App\Exceptions\OverlappingPeriodException;
use App\Exceptions\RegistrationNotEnabledException;
use App\Models\Activity;
use App\Models\EventDay;
use App\Settings\GeneralSettings;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Arr;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;
use Spatie\Period\Period;
use Spatie\Period\PeriodCollection;
use Spatie\Period\Precision;
use Throwable;

class EventDaysService extends BaseService {
    /**
     * Check if the provided reservable model
     *
     * @param ReservableModelContract $reservable_model
     *
     * @return bool
     */
    public
    function canReserveASpot(
        ReservableModelContract $reservable_model,
    ): bool {
        return $reservable_model->maxReservations() > $reservable_model->reservationCount();
    }

    /**
     * Checks if the registration is enabled or fail with an exception
     *
     * @return bool
     * @throws Throwable
     * @throws RegistrationNotEnabledException
     */
    public
    function isRegistrationEnabled(): bool {
        throw_if(
            is_null(app(GeneralSettings::class)->registration_enabled_from) ||
            is_null(app(GeneralSettings::class)->registration_enabled_to) ||
            !(
                now()->timestamp >= app(GeneralSettings::class)->registration_enabled_from->timestamp &&
                now()->timestamp <= app(GeneralSettings::class)->registration_enabled_to->timestamp
            ),
            RegistrationNotEnabledException::class,
        );

        return true;
    }

    /**
     * Get the count of the unique distinct events.
     * This call is optimized to automatically cache the query result and retrieve in all next calls.
     *
     * @param bool $refresh
     *
     * @return int
     */
    public
    function countUniqueEvents(
        bool $refresh = false,
    ): int {
        if ($refresh) {
            $unique_events = EventDay::query()->distinct()->count("event_days.date");
            Cache::forever(
                "unique_event_days_count",
                $unique_events,
            );

            return $unique_events;
        } else {
            return Cache::get(
                "unique_event_days_count",
                0,
            );
        }
    }

    /**
     * Retrieve the event identified by the provided pair and that has reservable spot.
     *
     * @param string|Carbon $date
     * @param string $location
     *
     * @return EventDay
     * @throws EventDayMaximumReservationsReachedException
     * @throws Throwable
     * @throws ModelNotFoundException
     */
    public
    function getReservableEventFromIdentificationPair(
        string|Carbon $date,
        string        $location,
    ): EventDay {
        $event_day = EventDay::whereDate(
            "date",
            "=",
            $date instanceof Carbon
                ? $date
                : make_from_format(
                $date,
                DatetimeFormatVariation::DATE,
            ),
        )->whereLocation($location)
                             ->firstOrFail();

        // if the reservation number for the given day exceed the maximum fail
        throw_unless(
            $this->canReserveASpot($event_day),
            EventDayMaximumReservationsReachedException::class,
            $event_day,
        );

        return $event_day;
    }

    /**
     * Prunes all event days and creates new one using the defined day-location pair
     *
     * @return void
     * @throws Throwable
     */
    public
    function sync(): void {
        $period = Period::make(
            app(GeneralSettings::class)->events_starting_day,
            app(GeneralSettings::class)->events_ending_day,
            Precision::DAY(),
        );

        DB::transaction(
            function() use ($period) {
                // remove all previously defined days
                EventDay::query()->delete();

                $locations = app(GeneralSettings::class)->event_locations;
                // for each day-location pair create a new event day
                foreach ($period as $day) {
                    foreach ($locations as $location) {
                        EventDay::create(
                            [
                                "nickname" => format_date(Carbon::createFromImmutable($day)) . " - {$location}",
                                "date"     => $day,
                                "location" => $location,
                            ],
                        );
                    }
                }

                $this->countUniqueEvents(true);
            },
        );
    }

    /**
     * @param string[] $activities_prefixed_id
     * @param EventDay|null $activities_owner
     *
     * @return Collection<Activity>
     * @throws Throwable
     * @throws OverlappingPeriodException
     * @throws ModelNotFoundException
     */
    public
    function validateActivitiesDoNotOverlap(
        array     $activities_prefixed_id,
        ?EventDay $activities_owner = null,
    ): Collection {
        // create the activity collection from their ids, we proceed to extract each activity associating it with
        // the event day, if not found this means that the activity does not belong to the event day - then fail
        $activities = collect(
            Arr::map(
                $activities_prefixed_id,
                fn(string $activity_id) => $activities_owner
                    ? $activities_owner->activities()
                                       ->wherePrefixedId($activity_id)
                                       ->firstOrFail()
                    : Activity::wherePrefixedId($activity_id)->firstOrFail(),
            ),
        );

        // create the collection of activities period, we assume that 2 activities overlaps if they start/end in
        // the same minute, this because hypothetically as all activities are in the same location even 5 minutes
        // will be enough to physically move from Activity 1 to 2
        $activities_periods = PeriodCollection::make(
            ...
            $activities->map(
                fn(Activity $activity) => Period::make(
                    $activity->starting_at,
                    $activity->ending_at,
                    Precision::MINUTE(),
                ),
            )->toArray(),
        );

        // recursively check if a period overlaps with one or more other periods (itself excluded)
        foreach ($activities_periods as $period) {
            throw_unless(
                $period->overlapAny(
                    ...
                    $activities_periods->filter(fn(Period $value) => $value !== $period),
                )->isEmpty(),
                OverlappingPeriodException::class,
            );
        }

        return $activities;
    }
}
