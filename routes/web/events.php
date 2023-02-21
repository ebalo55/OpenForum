<?php

use App\Enum\Permissions\Classes\Event as EventPermissions;
use App\Http\Livewire\Event\Activities\Create;
use App\Http\Livewire\Event\Activities\Edit;
use App\Http\Livewire\Event\Days\Index;

Route::middleware(
    [
        "can:" . EventPermissions::UPDATE(),
        "can:" . EventPermissions::CREATE(),
    ],
)->get(
    '/events',
    Index::class,
)->name('events.index');


Route::middleware(
    [
        "can:" . EventPermissions::UPDATE(),
        "can:" . EventPermissions::CREATE(),
    ],
)->get(
    '/events/{event}',
    \App\Http\Livewire\Event\Activities\Index::class,
)->name('events.activities');


Route::middleware(
    [
        "can:" . EventPermissions::CREATE(),
    ],
)->get(
    '/events/{event}/create',
    Create::class,
)->name('events.activities.create');


Route::middleware(
    [
        "can:" . EventPermissions::UPDATE(),
    ],
)->get(
    '/events/{event}/{activity}',
    Edit::class,
)->name('events.activities.edit');
