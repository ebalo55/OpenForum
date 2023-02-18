<?php

use App\Exceptions\UnserializableBackedEnumException;
use App\Trait\SerializableEnum;

// @codeCoverageIgnoreStart
if (!function_exists("pack_abilities_permissions")) {
    // @codeCoverageIgnoreEnd
    /**
     * Pack the provided list of permissions into a sanctum middleware ability string, useful for permission checking
     *
     * @param StringBackedEnum ...$permissions
     *
     * @return string
     * @throws UnserializableBackedEnumException
     * @throws Throwable
     */
    function pack_abilities_permissions(BackedEnum ...$permissions): string {
        // use the collection in order to use join method instead of implode
        $permission_collection = collect();

        // must verify that all permissions implement the serializable enum trait, if not fails
        foreach ($permissions as $permission) {
            $reflected_class = new ReflectionClass($permission);

            throw_unless(
                in_array(
                    SerializableEnum::class,
                    $reflected_class->getTraitNames(),
                    true,
                ),
                UnserializableBackedEnumException::class,
            );

            $permission_collection->push(($permission)());
        }

        return "abilities:" . $permission_collection->join(",");
    }
}
