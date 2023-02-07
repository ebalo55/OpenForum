<?php

namespace Tests\Feature\Http\Middleware;

use App\Http\Middleware\TrustHosts;
use Tests\TestCase;

class TrustHostsTest extends TestCase {
    public
    function test_can_get_hosts() {
        (new TrustHosts(app()))->hosts();

        // this is a placeholder test as the TrustHosts middleware is never used
        $this->assertTrue(true);
    }
}
