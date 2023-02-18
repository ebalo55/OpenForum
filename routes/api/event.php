<?php

use App\Enum\Permissions\Classes\Event as EventPermissions;
use App\Http\Controllers\Api\EventController;

Route::prefix("events")->group(
    function() {
        Route::get(
            "",
            [EventController::class, "index"],
        )->middleware(
            [
                pack_abilities_permissions(EventPermissions::READ),
            ],
        )->name("api.events.index");

        Route::post(
            "reserve",
            [EventController::class, "reserve"],
        )->middleware(
            [
                pack_abilities_permissions(EventPermissions::RESERVE),
            ],
        )->name("api.events.reserve");
    },
);
