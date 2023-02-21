<?php

use App\Enum\Permissions\Classes\Control;
use App\Enum\Permissions\Classes\Event as EventPermissions;
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
        "can:" . Control::MANAGE_USER_ROLES(),
    ],
)->get(
    "/user/{user}",
    Details::class,
)->name("user.details");
