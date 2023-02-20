<?php

namespace App\Facade;

use App\Service\AuthorizationService;
use Illuminate\Support\Facades\Facade;

class AuthorizationServiceFacade extends Facade {
    /**
     * Get the registered name of the component.
     */
    protected static
    function getFacadeAccessor(): string {
        return AuthorizationService::class;
    }
}
