<?php

namespace Tests\Feature\Helpers;

use Carbon\Carbon;
use Tests\TestCase;

class formatTest extends TestCase {
    /* NOTE: The file referenced by this test (app/Helpers/format.php) is excluded from coverage report as for some reason
     *  it seems not to correctly calculate it as covered.
     *  you can re-enable it in phpunit.xml
     */

    public
    function test_correctly_formats_datetime() {
        $this->assertEquals(
            "21/01/2023 12:30:05",
            format(
                Carbon::create(
                    2023,
                    1,
                    21,
                    12,
                    30,
                    5,
                ),
            ),
        );
    }

    public
    function test_correctly_formats_time() {
        $this->assertEquals(
            "12:30:05",
            format_time(
                Carbon::create(
                    2023,
                    1,
                    21,
                    12,
                    30,
                    5,
                ),
            ),
        );
    }

    public
    function test_correctly_formats_to_carbon() {
        $this->assertEquals(
            Carbon::create(
                2023,
                1,
                21,
                12,
                30,
                5,
            )->timestamp,
            make_from_format("21/01/2023 12:30:05")->timestamp,
        );
    }
}
