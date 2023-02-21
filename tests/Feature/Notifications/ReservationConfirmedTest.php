<?php

namespace Tests\Feature\Notifications;

use Tests\TestCase;

class ReservationConfirmedTest extends TestCase {
	/**
	 * A basic feature test example.
	 */
	public
	function test_example(): void {
		$response = $this->get('/');

		$response->assertStatus(200);
	}
}
