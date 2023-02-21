<?php

use App\Exceptions\ActivityMaximumReservationsReachedException;
use App\Exceptions\EventDayMaximumReservationsReachedException;
use App\Exceptions\LivewireComponentNotInitializedException;
use App\Exceptions\MissingOrInvalidHeadersException;
use App\Exceptions\OverlappingPeriodException;
use App\Exceptions\PendingUploadInProgressException;
use App\Exceptions\RegistrationNotEnabledException;
use App\Exceptions\UndefinedRegistryKeyException;
use App\Exceptions\UnserializableBackedEnumException;

return [
    /*
    |--------------------------------------------------------------------------
    | Super admin identity data
    |--------------------------------------------------------------------------
    |
    | This value determines the super admin data used during seeding.
    | If one or more of these data are not provided the default UNSAFE values
    | will be used
    |
    */
    "super_admin_id"                    => [
        "username" => env(
            "SUPER_ADMIN_USERNAME",
            \Illuminate\Support\Str::random(8),
        ),
        "email"    => env(
            "SUPER_ADMIN_EMAIL",
            "admin@example.com",
        ),
        "psw"      => env(
            "SUPER_ADMIN_PSW",
            "password",
        ),
    ],

    /*
    |--------------------------------------------------------------------------
    | Exception codes
    |--------------------------------------------------------------------------
    |
    | Globally define the exception codes of custom exception.
    | The following codes can be used as reference code for quick exception
    | retrieval, fixing and much more.
    | You can set them to whatever value you like, we prefer not to use values
    | too similar with HTTP status codes as returning them in API responses or
    | similar may result in unnecessary confusion.
    |
    */
    "exception_codes"                   => [
        MissingOrInvalidHeadersException::class            => 1000,
        PendingUploadInProgressException::class            => 1001,
        LivewireComponentNotInitializedException::class    => 1002,
        UnserializableBackedEnumException::class           => 1003,
        OverlappingPeriodException::class                  => 1004,
        ActivityMaximumReservationsReachedException::class => 1005,
        EventDayMaximumReservationsReachedException::class => 1006,
        UndefinedRegistryKeyException::class               => 1007,
        RegistrationNotEnabledException::class             => 1008,
    ],

    /*
    |--------------------------------------------------------------------------
    | Date & time formats
    |--------------------------------------------------------------------------
    |
    | Datetime conversion can be troublesome, the following values define a
    | common baseline to be used all around the platform.
    | Some helper methods are defined to quickly convert to and from datetime
    | values using these defaults.
    | The helper methods are:
    |   - `format`
    |   - `format_time`
    |   - `format_date`
    |   - `make_from_format`
    | Each of these methods is documented in its own function.
    |
    */
    "datetime_format"                   => "d/m/Y H:i:s",
    "date_format"                       => "d/m/Y",
    "time_format"                       => "H:i:s",

    /*
    |--------------------------------------------------------------------------
    | Date & time formats
    |--------------------------------------------------------------------------
    |
    | Defines the url assumed as a default for front-end email verification.
    | This url is used to craft an email verification link.
    |
    */
    "front_end_email_verification_path" => "/verification/email",
];
