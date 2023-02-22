<?php

use App\Enum\Permissions\Classes\Event as EventPermissions;
use App\Enum\Permissions\Classes\Management;
use App\Http\Livewire\Users\Details;
use App\Http\Livewire\Users\Index;

Route::middleware(
    [
        "can:" . EventPermissions::UPDATE(),
    ],
)->get(
    '/users',
    Index::class,
)->name('users.index');


Route::middleware(
    [
        "can:" . Management::USER_ROLES(),
    ],
)->get(
    "/user/{user}",
    Details::class,
)->name("user.details");
