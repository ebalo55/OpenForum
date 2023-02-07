<?php

namespace Tests\Feature\Http\Middleware;

use App\Models\User;
use Tests\TestCase;

class RedirectIfAuthenticatedTest extends TestCase {
    public
    function test_logged_in_users_get_redirected_if_requesting_login_page() {
        $response = $this->actingAs(User::first())->post('/login');

        $response->assertRedirect();
    }
}
