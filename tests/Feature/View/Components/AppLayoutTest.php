<?php

namespace Tests\Feature\View\Components;

use App\Models\User;
use Tests\TestCase;

class AppLayoutTest extends TestCase {
    /**
     * A basic feature test example.
     */
    public
    function test_can_render_dashboard(): void {
        $response = $this->actingAs($user = User::factory()->create())->get(route("dashboard"));

        $response->assertOk();
    }
}
