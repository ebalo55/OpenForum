<?php

namespace App\Exceptions;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\HttpException;

class OverlappingPeriodException extends HttpException {
    public
    function __construct() {
        parent::__construct(
            statusCode: Response::HTTP_CONFLICT,
            message:    "One or more activities overlap, check your choices and try again",
            code:       config("open-forum.exception_codes." . static::class),
        );
    }
}
