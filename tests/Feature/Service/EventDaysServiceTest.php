<?php

namespace Tests\Feature\Service;

use App\Exceptions\EventDayMaximumReservationsReachedException;
use App\Exceptions\OverlappingPeriodException;
use App\Facade\EventDayServiceFacade;
use App\Models\Activity;
use App\Models\EventDay;
use Carbon\Carbon;
use Illuminate\Support\Facades\Cache;
use Tests\TestCase;

class EventDaysServiceTest extends TestCase {
    public
    function test_can_check_if_can_reserve_a_spot_using_activity(): void {
        $activity = Activity::factory()->create();

        $this->assertEquals(
            0,
            $activity->maxReservations(),
        );
        $this->assertFalse(EventDayServiceFacade::canReserveASpot($activity));

        $activity->max_reservation = 5;
        $activity->save();
        $activity->refresh();
        $this->assertTrue(EventDayServiceFacade::canReserveASpot($activity));
    }

    public
    function test_can_check_if_can_reserve_a_spot_using_event(): void {
        $event_day = EventDay::factory()->create();

        $this->assertEquals(
            0,
            $event_day->maxReservations(),
        );
        $this->assertFalse(EventDayServiceFacade::canReserveASpot($event_day));

        $event_day->max_reservation = 5;
        $event_day->save();
        $event_day->refresh();
        $this->assertTrue(EventDayServiceFacade::canReserveASpot($event_day));
    }

    public
    function test_can_count_unique_events(): void {
        EventDay::factory()->count(2)->sequence(
            ["date" => now()->addDays()],
            ["date" => now()->addDays(2)],
        )->create();

        $this->assertFalse(Cache::has("unique_event_days_count"));
        $this->assertEquals(
            0,
            EventDayServiceFacade::countUniqueEvents(),
        );
        $this->assertFalse(Cache::has("unique_event_days_count"));

        $this->assertEquals(
            2,
            EventDayServiceFacade::countUniqueEvents(true),
        );
        $this->assertTrue(Cache::has("unique_event_days_count"));
        $this->assertEquals(
            2,
            Cache::get("unique_event_days_count"),
        );

        EventDay::factory()->count(2)->sequence(
            ["date" => now()->addDays(3)],
            ["date" => now()->addDays(4)],
        )->create();

        $this->assertEquals(
            2,
            EventDayServiceFacade::countUniqueEvents(),
        );
        $this->assertTrue(Cache::has("unique_event_days_count"));
        $this->assertEquals(
            2,
            Cache::get("unique_event_days_count"),
        );

        $this->assertEquals(
            4,
            EventDayServiceFacade::countUniqueEvents(true),
        );
        $this->assertTrue(Cache::has("unique_event_days_count"));
        $this->assertEquals(
            4,
            Cache::get("unique_event_days_count"),
        );
    }

    public
    function test_can_get_reservable_event_from_identification_pair() {
        /** @var EventDay $event */
        $event = EventDay::factory()->withMaxReservations(5)->create();

        $this->assertTrue(
            $event->is(
                EventDayServiceFacade::getReservableEventFromIdentificationPair(
                    $event->date,
                    $event->location,
                ),
            ),
        );

        $this->assertTrue(
            $event->is(
                EventDayServiceFacade::getReservableEventFromIdentificationPair(
                    format_date($event->date),
                    $event->location,
                ),
            ),
        );
    }

    public
    function test_can_validate_activities_do_not_overlap() {
        Carbon::setTestNow(Carbon::create(2023));
        $activities = Activity::factory()
                              ->count(2)
                              ->for($event = EventDay::factory()->create())
                              ->sequence(
                                  ["starting_at" => now()->addMinutes(), "ending_at" => now()->addHours()],
                                  ["starting_at" => now()->addMinutes(90), "ending_at" => now()->addHours(2)],
                              )
                              ->create();

        $ids = $activities->map(fn(Activity $activity) => $activity->prefixed_id)->toArray();

        foreach (EventDayServiceFacade::validateActivitiesDoNotOverlap($ids) as $key => $value) {
            /** @var Activity $value */
            $this->assertTrue($value->is($activities[$key]));
        }

        foreach (EventDayServiceFacade::validateActivitiesDoNotOverlap(
            $ids,
            $event,
        ) as $key => $value) {
            /** @var Activity $value */
            $this->assertTrue($value->is($activities[$key]));
        }
    }

    public
    function test_cannot_get_reservable_event_from_identification_pair_if_event_is_not_reservable() {
        /** @var EventDay $event */
        $event = EventDay::factory()->create();

        $this->expectException(EventDayMaximumReservationsReachedException::class);
        EventDayServiceFacade::getReservableEventFromIdentificationPair(
            $event->date,
            $event->location,
        );
    }

    public
    function test_cannot_validate_activities_do_not_overlap_if_one_or_more_activities_overlap() {
        Carbon::setTestNow(Carbon::create(2023));
        $activities = Activity::factory()
                              ->count(2)
                              ->for($event = EventDay::factory()->create())
                              ->sequence(
                                  ["starting_at" => now()->addMinutes(), "ending_at" => now()->addHours()],
                                  ["starting_at" => now()->addMinutes(1), "ending_at" => now()->addHours(2)],
                              )
                              ->create();

        $ids = $activities->map(fn(Activity $activity) => $activity->prefixed_id)->toArray();

        $this->expectException(OverlappingPeriodException::class);
        EventDayServiceFacade::validateActivitiesDoNotOverlap($ids);
    }
}
