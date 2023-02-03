<?php

namespace App\Exceptions;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\HttpException;

class FileNotFoundException extends HttpException {
    public
    function __construct() {
        parent::__construct(
            statusCode: Response::HTTP_NOT_FOUND,
            message:    "Something went wrong during the upload, the file is missing",
            code:       config("student-forum.exception_codes." . static::class),
        );
    }
}
