<?php

namespace App\Exceptions;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\HttpException;

class RegistrationNotEnabledException extends HttpException {
	public
	function __construct() {
		parent::__construct(
			statusCode: Response::HTTP_PRECONDITION_FAILED,
			message:    "Registration not currently enabled.",
			code:       config("open-forum.exception_codes." . static::class),
		);
	}
}
