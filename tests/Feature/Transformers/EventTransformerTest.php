<?php

namespace Tests\Feature\Transformers;

use App\Models\Activity;
use App\Models\EventDay;
use App\Models\Reservation;
use App\Models\User;
use App\Transformers\EventTransformer;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Tests\TestCase;

class EventTransformerTest extends TestCase {
    public
    function test_correctly_aborts_reservations_inclusion_if_not_having_export_permission(): void {
        $event = EventDay::factory()->has(Reservation::factory(2))->create();

        $this->actingAs(User::factory()->create());

        $this->expectException(HttpException::class);
        (new EventTransformer())->includeReservations($event);
    }

    public
    function test_correctly_includes_activities(): void {
        $event = EventDay::factory()->has(Activity::factory(2))->create();

        foreach ((new EventTransformer())->includeActivities($event)->getData() as $key => $data) {
            $this->assertTrue($event->activities[$key]->is($data));
        }
    }

    public
    function test_correctly_includes_reservations(): void {
        $event = EventDay::factory()->has(Reservation::factory(2))->create();

        $this->actingAs(User::first());

        foreach ((new EventTransformer())->includeReservations($event)->getData() as $key => $data) {
            $this->assertTrue($event->reservations[$key]->is($data));
        }
    }

    public
    function test_correctly_transforms_data(): void {
        $event = EventDay::factory()->create();

        $this->assertEquals(
            [
                "id"                     => $event->prefixed_id,
                "available_reservations" => $event->max_reservation - $event->reservations()->count(),
                "date"                   => format_date($event->date),
                "location"               => $event->location,
            ],
            (new EventTransformer())->transform($event),
        );
    }
}
