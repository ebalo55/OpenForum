<?php

namespace App\Exceptions;

use RuntimeException;

class LivewireComponentNotInitialized extends RuntimeException {
	public
	function __construct() {
		parent::__construct(
			message: "Livewire component not initialized or missing during dynamic call.",
			code:    config("student-forum.exception_codes." . static::class),
		);
	}
}
