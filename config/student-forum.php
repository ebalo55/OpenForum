<?php

use App\Exceptions\MissingOrInvalidHeadersException;
use App\Exceptions\PendingUploadInProgressException;

return [
    "super_admin_psw" => env(
        "SUPER_ADMIN_PSW",
        "password",
    ),

    "exception_codes" => [
        MissingOrInvalidHeadersException::class => 1000,
        PendingUploadInProgressException::class => 1001,
    ],

    "datetime_format" => "d/m/Y H:i:s",

    "time_format" => "H:i:s",
];
