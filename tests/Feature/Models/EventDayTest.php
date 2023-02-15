<?php

namespace Tests\Feature\Models;

use App\Models\Activity;
use App\Models\EventDay;
use App\Models\Reservation;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class EventDayTest extends TestCase {
    public
    function test_can_get_activities(): void {
        $event = EventDay::factory()->has(Activity::factory()->count(2))->create();

        $this->assertCount(
            2,
            $event->activities,
        );
    }

    public
    function test_can_get_reservations(): void {
        $event = EventDay::factory()->has(Reservation::factory()->count(2))->create();

        $this->assertCount(
            2,
            $event->reservations,
        );
    }

    public
    function test_model_binding_is_prefixed_id(): void {
        $this->assertEquals(
            config("prefixed-ids.prefixed_id_attribute_name"),
            (new EventDay())->getRouteKeyName(),
        );
    }
}
