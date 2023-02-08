<?php

namespace Tests\Unit;

use App\Enum\Metadata\Collectable;
use App\Trait\SerializableEnum;
use ArchTech\Enums\Meta\Meta;
use Illuminate\Support\Collection;
use PHPUnit\Framework\TestCase;
use stdClass;

/**
 * @method Collection<string> collect()
 */
#[Meta(Collectable::class)]
enum TestEnumCollectableAttribute: string {
    use SerializableEnum;

    #[Collectable(stdClass::class)]
    case NOT_AN_ENUM_INSIDE = "naei";
    #[Collectable(TestEnumCollectableAttribute::class)]
    case AN_ENUM_INSIDE     = "aei";
}

class EnumCollectableAttributeTest extends TestCase {
    public
    function test_collecting_on_enum_return_its_values(): void {
        $this->assertContains(
            "aei",
            TestEnumCollectableAttribute::AN_ENUM_INSIDE->collect(),
        );
        $this->assertContains(
            "naei",
            TestEnumCollectableAttribute::AN_ENUM_INSIDE->collect(),
        );
    }

    public
    function test_collecting_on_non_enum_returns_empty_collection(): void {
        $this->assertCount(
            0,
            TestEnumCollectableAttribute::NOT_AN_ENUM_INSIDE->collect(),
        );
    }
}
