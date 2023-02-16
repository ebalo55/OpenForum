<?php

use App\Http\Controllers\Api\EventController;
use App\Enum\Permissions\Classes\Event as EventPermissions;

Route::prefix("events")->group(
    function() {
        Route::get(
            "",
            [EventController::class, "index"],
        )->middleware(
            [
                pack_abilities_permissions(EventPermissions::READ),
            ],
        )->name("event.index");

        Route::post(
            "reserve",
            [EventController::class, "reserve"],
        )->middleware(
            [
                pack_abilities_permissions(EventPermissions::RESERVE),
            ],
        )->name("event.reserve");
    },
);
