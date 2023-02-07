<?php

namespace Tests\Feature\Transformers;

use App\Transformers\NullTransformer;
use Tests\TestCase;

class NullTransformerTest extends TestCase {
    public
    function test_all_properties_are_passed_through() {
        $transformer = new NullTransformer();

        $sample_data = ["test" => "value", "a" => false, "b" => 1];
        $this->assertEquals(
            $sample_data,
            $transformer->transform($sample_data),
        );
    }
}
