<?php

namespace Tests\Feature\Models;

use App\Models\Reservation;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserTest extends TestCase {
	public
	function test_can_get_users_reservations(): void {
		Reservation::factory(2)->withUser($user = User::factory()->create())->create();

		$this->assertCount(
			2,
			$user->reservations,
		);
	}

	public
	function test_model_binding_is_prefixed_id(): void {
		$this->assertEquals(
			config("prefixed-ids.prefixed_id_attribute_name"),
			(new User())->getRouteKeyName(),
		);
	}
}
