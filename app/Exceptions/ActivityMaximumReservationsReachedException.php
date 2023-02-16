<?php

namespace App\Exceptions;

use App\Models\Activity;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\HttpException;

class ActivityMaximumReservationsReachedException extends HttpException {
    public
    function __construct(
        Activity $activity,
    ) {
        parent::__construct(
            statusCode: Response::HTTP_CONFLICT,
            message:    "Unable to reserve a spot for the activity named '{$activity->title}', maximum number of reservation already reached.",
            code:       config("student-forum.exception_codes." . static::class),
        );
    }
}
