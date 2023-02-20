<?php

namespace App\Support;

use App\Data\NavigationRegistryData;
use App\Service\BaseService;

class NavigationRegistry extends BaseService {
    /**
     * Get the content of the registry
     *
     * @return NavigationRegistryData[]
     */
    public static
    function get(): array {
        return Registry::get(static::class);
    }

    /**
     * Push an element to the registry
     *
     * @param NavigationRegistryData $navigation_registry_data
     *
     * @return void
     */
    public static
    function push(
        NavigationRegistryData $navigation_registry_data,
    ): void {
        Registry::push(
            static::class,
            $navigation_registry_data,
        );
    }

    /**
     * Push an arbitrary number of elements to the registry
     *
     * @param NavigationRegistryData[] $values
     *
     * @return void
     */
    public static
    function pushMany(
        array $values,
    ): void {
        foreach ($values as $value) {
            static::push(
                $value,
            );
        }
    }
}
