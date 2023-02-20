<?php

namespace App\Exceptions;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\HttpException;

class MissingOrInvalidHeadersException extends HttpException {
    public
    function __construct() {
        parent::__construct(
            statusCode: Response::HTTP_PRECONDITION_FAILED,
            message:    "Something went wrong during the upload, the file is missing or required headers not present",
            code:       config("open-forum.exception_codes." . static::class),
        );
    }
}
