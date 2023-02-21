<?php

use App\Http\Controllers\PagesController;
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

Route::mailPreview('mail-preview');

Route::middleware(
    [
        'auth:sanctum',
        config('jetstream.auth_session'),
        'verified',
    ],
)->group(
    function() {
        require "web/dashboard.php";
        require "web/settings.php";
        require "web/users.php";
        require "web/events.php";
    },
);

Route::get(
    "/email/verify/{id}/{hash}",
    [PagesController::class, "emailVerificationRedirect"],
)->middleware(
    [
        config(
            "fortify.auth_middleware",
            "auth",
        ) . ":" . config("fortify.guard"),
    ],
)->name("verification.verify");
