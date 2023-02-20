<?php

namespace App\Exceptions;

use App\Models\Activity;
use App\Models\EventDay;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\HttpException;

class EventDayMaximumReservationsReachedException extends HttpException {
    public
    function __construct(
        EventDay $event_day,
    ) {
        parent::__construct(
            statusCode: Response::HTTP_CONFLICT,
	        message:    "Unable to reserve a spot for the event of " .
	                    format_date($event_day->date) .
	                    " in {$event_day->location}, maximum number of reservation already reached.",
	        code:       config("open-forum.exception_codes." . static::class),
        );
    }
}
