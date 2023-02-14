<?php

namespace App\Facade;

use App\Service\QueryService;
use Illuminate\Support\Facades\Facade;

class QueryServiceFacade extends Facade {
    /**
     * Get the registered name of the component.
     */
    protected static
    function getFacadeAccessor(): string {
        return QueryService::class;
    }
}
