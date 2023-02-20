<?php

namespace App\Support;

use App\Exceptions\UndefinedRegistryKeyException;
use App\Service\BaseService;
use Closure;


class Registry {
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
		if (isset(static::$registry[$register])) {
			return static::$registry[$register];
		}
		throw new UndefinedRegistryKeyException();
	}

	/**
	 * Checks whether the registry has a given register
	 *
	 * @param string $register
	 *
	 * @return bool
	 */
	public static
	function has(
		string $register,
	): bool {
		return isset(static::$registry[$register]);
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
	 * Purge a record from the registry
	 *
	 * @param string $register
	 *
	 * @return bool
	 */
	public static
	function purge(
		string $register,
	): bool {
		if (array_key_exists(
			$register,
			static::$registry,
		)) {
			unset(static::$registry[$register]);
			return true;
		}

		return false;
	}

	/**
	 * Purge all records in the registry
	 *
	 * @return bool
	 */
	public static
	function purgeAll(): bool {
		// Get all keys in the registry and recursively purge all of them, if one operation fails all other operation
		// will not be executed and the result will be fals
		return array_reduce(
			array_keys(static::$registry),
			fn(bool $previous_value, string $key) => $previous_value && static::purge($key),
			true,
		);
	}

	/**
	 * Push an element to the registry
	 *
	 * @param string $register
	 * @param mixed $value
	 *
	 * @return bool
	 */
	public static
	function push(
		string $register,
		mixed  $value,
	): bool {
		static::$registry[$register][] = $value;
		return true;
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
	 * @return bool
	 */
	public static
	function walk(
		string  $register,
		Closure $closure,
	): bool {
		return array_walk(
			static::$registry[$register],
			$closure,
		);
	}
}
