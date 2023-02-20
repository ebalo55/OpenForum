<?php

namespace App\Support;

use App\Service\BaseService;
use Closure;

abstract
class Registry extends BaseService {
    protected static array $registry = [];

    /**
     * Get the content of the registry
     *
     * @param string $register
     *
     * @return array
     */
    public static
    function get(
        string $register,
    ): array {
        return static::$registry[$register];
    }

    /**
     * Pop the last element from the registry and return it
     *
     * @param string $register
     *
     * @return mixed
     */
    public static
    function pop(
        string $register,
    ): mixed {
        return array_pop(static::$registry[$register]);
    }

    /**
     * Push an element to the registry
     *
     * @param string $register
     * @param mixed $value
     *
     * @return void
     */
    public static
    function push(
        string $register,
        mixed  $value,
    ): void {
        static::$registry[$register][] = $value;
    }

    /**
     * Shift the first element from the registry and return it
     *
     * @param string $register
     *
     * @return mixed
     */
    public static
    function shift(
        string $register,
    ): mixed {
        return array_shift(static::$registry[$register]);
    }

    /**
     * Run a callback on each element of the registry
     *
     * @param string $register
     * @param Closure $closure fn($value, $index) => {}
     *
     * @return void
     */
    public static
    function walk(
        string  $register,
        Closure $closure,
    ): void {
        array_walk(
            static::$registry[$register],
            $closure,
        );
    }
}
