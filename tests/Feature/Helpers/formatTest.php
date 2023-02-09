<?php

namespace Tests\Feature\Helpers;

use Carbon\Carbon;
use Tests\TestCase;

class formatTest extends TestCase {
    public
    function test_correctly_formats_datetime() {
        Carbon::setTestNow(
            Carbon::create(
                2023,
                1,
                21,
                12,
                30,
                5,
            ),
        );
        $this->assertEquals(
            "21/01/2023 12:30:05",
            format(now()),
        );
    }
}
