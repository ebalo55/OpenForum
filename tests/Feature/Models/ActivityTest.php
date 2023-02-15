<?php

namespace Tests\Feature\Models;

use App\Models\Activity;
use App\Models\Reservation;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ActivityTest extends TestCase {
	public
	function test_can_get_relations(): void {
		$activity = Activity::factory()->has(Reservation::factory()->count(2))->create();

		$this->assertCount(
			2,
			$activity->reservations,
		);
		$this->assertModelExists($activity->eventDay);
	}

	public
	function test_model_binding_is_prefixed_id(): void {
		$this->assertEquals(
			config("prefixed-ids.prefixed_id_attribute_name"),
			(new Activity())->getRouteKeyName(),
		);
	}
}
