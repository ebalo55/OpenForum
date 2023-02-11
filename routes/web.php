<?php

use App\Http\Controllers\PagesController;
use App\Http\Livewire\Dashboard\Index;
use App\Http\Livewire\Settings\Editor;
use App\Http\Livewire\Users\Import;
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
        )->group(
	        function() {
		        Route::get(
			        '/settings',
			        Editor::class,
		        )->name('settings.editor');
	        },
        );

	    Route::middleware(
		    [
			    "can:" . \App\Enum\Permissions\Classes\Event::UPDATE(),
		    ],
	    )->group(
		    function() {
			    Route::get(
				    '/users',
				    \App\Http\Livewire\Users\Index::class,
			    )->name('users.index');
		    },
	    );
    },
);
