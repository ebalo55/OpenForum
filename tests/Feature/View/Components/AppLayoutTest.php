<?php

namespace Tests\Feature\View\Components;

use App\Models\User;
use App\View\Components\AppLayout;
use Tests\TestCase;

class AppLayoutTest extends TestCase {
	public
	function test_can_render_dashboard(): void {
		$response = $this->actingAs($user = User::factory()->create())->get(route("dashboard"));

		$response->assertOk();
	}

	public
	function test_can_render(): void {
		$class = new AppLayout();

		$view = $class->render();

		$this->assertEquals(
			"layouts.app",
			$view->getName(),
		);
	}
}
