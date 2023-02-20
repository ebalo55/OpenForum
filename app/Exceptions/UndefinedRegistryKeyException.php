<?php

namespace App\Exceptions;

use RuntimeException;

class UndefinedRegistryKeyException extends RuntimeException {
	public
	function __construct() {
		parent::__construct(
			message: "The provided key does not exist in any registry.",
			code:    config("open-forum.exception_codes." . static::class),
		);
	}
}
