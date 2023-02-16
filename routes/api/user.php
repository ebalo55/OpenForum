<?php

use App\Enum\Permissions\Classes\User;
use App\Http\Controllers\Api\UserController;

Route::prefix("users")->group(
    function() {
        Route::get(
            "/",
            [UserController::class, "current"],
        )->middleware(pack_abilities_permissions(User::READ_CURRENT))
             ->name("user.me");

        $limiter = config('fortify.limiters.login');
        $verificationLimiter = config(
            'fortify.limiters.verification',
            '3,1',
        );

        Route::post(
            "/login",
            [UserController::class, "login"],
        )->middleware(
            array_filter(
                [
                    pack_abilities_permissions(User::EXTERNAL__LOGIN),
                    $limiter ? 'throttle:' . $limiter : null,
                ],
            ),
        )->name("user.external.login");

        Route::post(
            "/email/verify/request-new",
            [UserController::class, "requestNewVerificationEmail"],
        )->middleware(
            [
                pack_abilities_permissions(
                    User::EXTERNAL__EMAIL_VERIFICATION,
                    User::EXTERNAL__EMAIL_VERIFICATION__REQUEST_NEW,
                ),
                config(
                    "fortify.auth_middleware",
                    "auth",
                ) . ":" . config("fortify.guard"),
                "throttle:" . $verificationLimiter,
            ],
        )->name("user.external.verify_email.request_new");

        Route::post(
            "/email/verify/{id}/{hash}",
            [UserController::class, "verifyEmail"],
        )->middleware(
            [
                pack_abilities_permissions(User::EXTERNAL__EMAIL_VERIFICATION),
                config(
                    "fortify.auth_middleware",
                    "auth",
                ) . ":" . config("fortify.guard"),
            ],
        )->name("user.external.verify_email");
    },
);
