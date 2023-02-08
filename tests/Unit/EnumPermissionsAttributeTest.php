<?php

namespace Tests\Unit;

use App\Enum\Metadata\Permissions;
use App\Trait\SerializableEnum;
use ArchTech\Enums\Meta\Meta;
use PHPUnit\Framework\TestCase;
use stdClass;

/**
 * @method string[] permissions()
 */
#[Meta(Permissions::class)]
enum TestEnumPermissionsAttribute: string {
    use SerializableEnum;

    #[Permissions(stdClass::class)]
    case NOT_AN_ENUM_INSIDE = "naei";
    #[Permissions(TestEnumPermissionsAttribute::class)]
    case AN_ENUM_INSIDE     = "aei";
}

class EnumPermissionsAttributeTest extends TestCase {
    public
    function test_collecting_on_enum_return_its_values(): void {
        $this->assertContains(
            "aei",
            TestEnumPermissionsAttribute::AN_ENUM_INSIDE->permissions(),
        );
        $this->assertContains(
            "naei",
            TestEnumPermissionsAttribute::AN_ENUM_INSIDE->permissions(),
        );
    }

    public
    function test_collecting_on_non_enum_returns_empty_collection(): void {
        $this->assertCount(
            0,
            TestEnumPermissionsAttribute::NOT_AN_ENUM_INSIDE->permissions(),
        );
    }
}
