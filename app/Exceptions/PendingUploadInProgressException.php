<?php

namespace App\Exceptions;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\HttpException;

class PendingUploadInProgressException extends HttpException {
    public
    function __construct() {
        parent::__construct(
            statusCode: Response::HTTP_LOCKED,
            message:    "Cannot proceed with the data import as another import is already in progress",
            code:       config("student-forum.exception_codes." . static::class),
        );
    }
}
