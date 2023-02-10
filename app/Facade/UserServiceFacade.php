<?php

namespace App\Facade;

use App\Service\UserService;
use Illuminate\Support\Facades\Facade;

class UserServiceFacade extends Facade {
    /**
     * Get the registered name of the component.
     */
    protected static
    function getFacadeAccessor(): string {
        return UserService::class;
    }
}
