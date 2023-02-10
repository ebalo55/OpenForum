<?php

namespace App\Facade;

use App\Service\SettingsService;
use Illuminate\Support\Facades\Facade;

class SettingServiceFacade extends Facade {
    /**
     * Get the registered name of the component.
     */
    protected static
    function getFacadeAccessor(): string {
        return SettingsService::class;
    }
}
