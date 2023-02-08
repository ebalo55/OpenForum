<?php

namespace Tests\Feature\Helpers;

use Spatie\Fractal\Fractal;
use Tests\TestCase;

class FractalMacroTest extends TestCase {
    public
    function test_fractal_has_error_method() {
        $this->assertTrue(
            Fractal::hasMacro("error"),
        );

        $this->assertEquals(
            [
                "data" => [],
                "meta" => [
                    "success" => true,
                    "errors"  => null,
                ],
            ],
            Fractal::success()->toArray(),
        );
    }

    public
    function test_fractal_has_success_method() {
        $this->assertTrue(
            Fractal::hasMacro("success"),
        );

        $this->assertEquals(
            [
                "data" => [],
                "meta" => [
                    "success" => false,
                    "errors"  => ["test"],
                ],
            ],
            Fractal::error(["test"])->toArray(),
        );
    }
}
