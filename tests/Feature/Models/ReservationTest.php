<?php

namespace Tests\Feature\Models;

use App\Models\Reservation;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ReservationTest extends TestCase {
	public
	function test_can_get_relations(): void {
		$reservation = Reservation::factory()->create();

		$this->assertModelExists($reservation->activity);
		$this->assertModelExists($reservation->eventDay);
		$this->assertModelExists($reservation->user);
	}

	public
	function test_model_binding_is_prefixed_id(): void {
		$this->assertEquals(
			config("prefixed-ids.prefixed_id_attribute_name"),
			(new Reservation())->getRouteKeyName(),
		);
	}
}
