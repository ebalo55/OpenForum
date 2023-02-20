<?php

namespace App\Exceptions;

use App\Trait\SerializableEnum;
use RuntimeException;

class UnserializableBackedEnumException extends RuntimeException {
    public
    function __construct() {
        parent::__construct(
            message: "Unserializable backed enum detected, you're missing the " . SerializableEnum::class . ".",
	        code:    config("open-forum.exception_codes." . static::class),
        );
    }
}
