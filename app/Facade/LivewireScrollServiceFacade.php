<?php

namespace App\Facade;

use App\Service\LivewireScrollService;
use Illuminate\Support\Facades\Facade;

class LivewireScrollServiceFacade extends Facade {
    /**
     * Get the registered name of the component.
     */
    protected static
    function getFacadeAccessor(): string {
        return LivewireScrollService::class;
    }
}
