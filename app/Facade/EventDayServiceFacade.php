<?php

namespace App\Facade;

use App\Service\EventDaysService;
use Illuminate\Support\Facades\Facade;

class EventDayServiceFacade extends Facade {
    /**
     * Get the registered name of the component.
     */
    protected static
    function getFacadeAccessor(): string {
        return EventDaysService::class;
    }
}
