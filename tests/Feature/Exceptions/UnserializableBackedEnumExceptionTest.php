<?php

namespace Tests\Feature\Exceptions;

use App\Exceptions\UnserializableBackedEnumException;
use Tests\TestCase;

class UnserializableBackedEnumExceptionTest extends TestCase {
    public
    function test_can_instantiate_exception(): void {
        $exception = new UnserializableBackedEnumException();

        $this->assertEquals(
            config("student-forum.exception_codes.App\Exceptions\UnserializableBackedEnumException"),
            $exception->getCode(),
        );
    }
}
