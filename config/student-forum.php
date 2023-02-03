<?php

use App\Exceptions\FileNotFoundException;
use App\Exceptions\MissingOrInvalidHeadersException;
use App\Exceptions\PendingUploadInProgressException;

return [
    "super_admin_psw" => env(
        "SUPER_ADMIN_PSW",
        "password",
    ),

    "exception_codes" => [
        FileNotFoundException::class            => 1000,
        MissingOrInvalidHeadersException::class => 1001,
        PendingUploadInProgressException::class => 1002,
    ],
];
