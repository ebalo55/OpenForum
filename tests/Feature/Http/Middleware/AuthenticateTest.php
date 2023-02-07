<?php

namespace Tests\Feature\Http\Middleware;

use Tests\TestCase;

class AuthenticateTest extends TestCase {
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public
    function test_redirect_to_login_if_requesting_an_authenticated_route() {
        $response = $this->get(route("user.me"));
        $response->assertRedirect();
    }
}
