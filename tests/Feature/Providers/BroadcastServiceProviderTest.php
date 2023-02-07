<?php

namespace Tests\Feature\Providers;

use App\Providers\BroadcastServiceProvider;
use Tests\TestCase;

class BroadcastServiceProviderTest extends TestCase {
    public
    function test_can_create_brodcast_service_provider() {
        $provider = new BroadcastServiceProvider($this->app);
        $this->assertNotNull($provider);
        $provider->boot();
    }
}
