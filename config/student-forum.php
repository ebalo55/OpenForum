<?php

use App\Exceptions\ActivityMaximumReservationsReachedException;
use App\Exceptions\EventDayMaximumReservationsReachedException;
use App\Exceptions\LivewireComponentNotInitializedException;
use App\Exceptions\MissingOrInvalidHeadersException;
use App\Exceptions\OverlappingPeriodException;
use App\Exceptions\PendingUploadInProgressException;
use App\Exceptions\UnserializableBackedEnumException;

return [
    "super_admin_psw" => env(
        "SUPER_ADMIN_PSW",
        "password",
    ),

    "exception_codes" => [
        MissingOrInvalidHeadersException::class            => 1000,
        PendingUploadInProgressException::class            => 1001,
        LivewireComponentNotInitializedException::class    => 1002,
        UnserializableBackedEnumException::class           => 1003,
        OverlappingPeriodException::class                  => 1004,
        ActivityMaximumReservationsReachedException::class => 1005,
        EventDayMaximumReservationsReachedException::class => 1006,
    ],

    "datetime_format" => "d/m/Y H:i:s",
    "date_format"     => "d/m/Y",
    "time_format"     => "H:i:s",

    "front_end_email_verification_path" => "/verification/email",
];
