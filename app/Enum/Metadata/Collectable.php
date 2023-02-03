<?php

namespace App\Enum\Metadata;

use ArchTech\Enums\Meta\MetaProperty;
use Attribute;
use Illuminate\Support\Collection;

#[Attribute]
class Collectable extends MetaProperty {
    public static
    function method(): string {
        return "collect";
    }

    protected
    function transform(
        mixed $permissions_class_name,
    ): Collection {
        // if the provided string is an enum and has a values method we assume it extends the SerializableEnum trait
        // and return its values as string array
        if (enum_exists($permissions_class_name) &&
            method_exists(
                $permissions_class_name,
                "values",
            )) {
            return collect($permissions_class_name::values());
        }
        return collect();
    }
}
