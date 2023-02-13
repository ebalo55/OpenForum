<?php

namespace Tests\Feature\Http\Controllers;

use Tests\TestCase;

class PagesControllerTest extends TestCase {
    public
    function test_root_redirect_to_login(): void {
        $response = $this->get('/');

        $response->assertRedirectToRoute("login");
    }
}
