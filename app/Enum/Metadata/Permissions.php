<?php

namespace App\Enum\Metadata;

use ArchTech\Enums\Meta\MetaProperty;
use Attribute;

#[Attribute]
class Permissions extends MetaProperty {
    /**
     * Returns the enum class values
     *
     * @param mixed $permissions_class_name
     *
     * @return string[]
     */
    protected
    function transform(
        mixed $permissions_class_name,
    ): array {
        // if the provided string is an enum and has a values method we assume it extends the SerializableEnum trait
        // and return its values as string array
        if (enum_exists($permissions_class_name) &&
            method_exists(
                $permissions_class_name,
                "values",
            )) {
            return $permissions_class_name::values();
        }
        return [];
    }
}
