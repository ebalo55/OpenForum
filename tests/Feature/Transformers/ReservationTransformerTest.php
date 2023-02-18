<?php

namespace Tests\Feature\Transformers;

use App\Models\Reservation;
use App\Transformers\ReservationTransformer;
use Tests\TestCase;

class ReservationTransformerTest extends TestCase {
    public
    function test_correctly_includes_activity(): void {
        $reservation = Reservation::factory()->create();

        $this->assertTrue(
            $reservation->activity->is((new ReservationTransformer())->includeActivity($reservation)->getData()),
        );
    }

    public
    function test_correctly_includes_event(): void {
        $reservation = Reservation::factory()->create();

        $this->assertTrue(
            $reservation->eventDay->is((new ReservationTransformer())->includeEvent($reservation)->getData()),
        );
    }

    public
    function test_correctly_includes_user(): void {
        $reservation = Reservation::factory()->create();

        $this->assertTrue($reservation->user->is((new ReservationTransformer())->includeUser($reservation)->getData()));
    }

    public
    function test_correctly_transforms_data(): void {
        $reservation = Reservation::factory()->create();

        $this->assertEquals(
            [
                "id"       => $reservation->prefixed_id,
                "user"     => $reservation->user->prefixed_id,
                "event"    => $reservation->eventDay->prefixed_id,
                "activity" => $reservation->activity->prefixed_id,
            ],
            (new ReservationTransformer())->transform($reservation),
        );
    }
}
