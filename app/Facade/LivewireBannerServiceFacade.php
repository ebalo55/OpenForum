<?php

namespace App\Facade;

use App\Service\LivewireBannerService;
use Illuminate\Support\Facades\Facade;

class LivewireBannerServiceFacade extends Facade {
    /**
     * Get the registered name of the component.
     */
    protected static
    function getFacadeAccessor(): string {
        return LivewireBannerService::class;
    }
}
