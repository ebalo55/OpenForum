<?php

use App\Http\Controllers\PagesController;
use App\Http\Livewire\Dashboard\Index;
use App\Http\Livewire\Event\Activities\Create;
use App\Http\Livewire\Event\Activities\Edit;
use App\Http\Livewire\Settings\Editor;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get(
    '/',
    [PagesController::class, "loginRedirect"],
);

Route::middleware(
    [
        'auth:sanctum',
        config('jetstream.auth_session'),
        'verified',
    ],
)->group(
    function() {
        Route::get(
            '/dashboard',
            Index::class,
        )->name('dashboard');

        Route::middleware(
            [
                "can:" . \App\Enum\Permissions\Classes\Event::UPDATE(),
            ],
        )->get(
            '/settings',
            Editor::class,
        )->name('settings.editor');

        Route::middleware(
            [
                "can:" . \App\Enum\Permissions\Classes\Event::UPDATE(),
            ],
        )->get(
            '/users',
            \App\Http\Livewire\Users\Index::class,
        )->name('users.index');

        Route::middleware(
            [
                "can:" . \App\Enum\Permissions\Classes\Event::UPDATE(),
                "can:" . \App\Enum\Permissions\Classes\Event::CREATE(),
            ],
        )->get(
            '/events',
            \App\Http\Livewire\Event\Days\Index::class,
        )->name('events.index');

        Route::middleware(
            [
                "can:" . \App\Enum\Permissions\Classes\Event::UPDATE(),
                "can:" . \App\Enum\Permissions\Classes\Event::CREATE(),
            ],
        )->get(
            '/events/{event}',
            \App\Http\Livewire\Event\Activities\Index::class,
        )->name('events.activities');

        Route::middleware(
            [
                "can:" . \App\Enum\Permissions\Classes\Event::CREATE(),
            ],
        )->get(
            '/events/{event}/create',
            Create::class,
        )->name('events.activities.create');

        Route::middleware(
            [
                "can:" . \App\Enum\Permissions\Classes\Event::UPDATE(),
            ],
        )->get(
            '/events/{event}/{activity}',
            Edit::class,
        )->name('events.activities.edit');
    },
);
