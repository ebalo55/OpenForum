<?php

namespace Tests\Feature\Support;

use App\Exceptions\UndefinedRegistryKeyException;
use App\Support\Registry;
use stdClass;
use Tests\TestCase;

class RegistryTest extends TestCase {
	public
	function test_accessing_non_existing_registry_fails(): void {
		$this->expectException(UndefinedRegistryKeyException::class);
		Registry::get("test");
	}

	public
	function test_can_pop_values(): void {
		Registry::push(
			"test",
			"value",
		);
		Registry::push(
			"test",
			1,
		);

		$this->assertEquals(
			1,
			Registry::pop("test"),
		);
		$this->assertEquals(
			["value"],
			Registry::get("test"),
		);

		$this->assertTrue(Registry::purgeAll());
		$this->expectException(UndefinedRegistryKeyException::class);
		Registry::get("test");
	}

	public
	function test_can_purge_existing_values(): void {
		Registry::push(
			"test",
			"value",
		);

		$this->assertTrue(Registry::purge("test"));
		$this->expectException(UndefinedRegistryKeyException::class);
		Registry::get("test");
	}

	public
	function test_can_push_values_to_the_registry(): void {
		Registry::push(
			"test",
			"value",
		);

		$this->assertEquals(
			["value"],
			Registry::get("test"),
		);

		$this->assertTrue(Registry::purgeAll());
		$this->expectException(UndefinedRegistryKeyException::class);
		Registry::get("test");
	}

	public
	function test_can_shift_values(): void {
		Registry::push(
			"test",
			"value",
		);
		Registry::push(
			"test",
			1,
		);

		$this->assertEquals(
			"value",
			Registry::shift("test"),
		);
		$this->assertEquals(
			[1],
			Registry::get("test"),
		);

		$this->assertTrue(Registry::purgeAll());
		$this->expectException(UndefinedRegistryKeyException::class);
		Registry::get("test");
	}

	public
	function test_can_walk_values(): void {
		Registry::push(
			"test",
			"value",
		);
		Registry::push(
			"test",
			1,
		);

		Registry::walk(
			"test",
			function($value, int $index) {
				if ($index === 0) {
					$this->assertEquals(
						"value",
						$value,
					);
				} else {
					$this->assertEquals(
						1,
						$value,
					);
				}
			},
		);

		$this->assertTrue(Registry::purgeAll());
		$this->expectException(UndefinedRegistryKeyException::class);
		Registry::get("test");
	}

	public
	function test_cannot_purge_non_existing_values(): void {
		$this->assertFalse(Registry::purge("test"));
	}

	public
	function test_correctly_checks_key_presence(): void {
		Registry::push(
			"test",
			"value",
		);

		$this->assertTrue(Registry::has("test"));
		$this->assertFalse(Registry::has("non-existing-register"));

		$this->assertTrue(Registry::purgeAll());
		$this->expectException(UndefinedRegistryKeyException::class);
		Registry::get("test");
	}

	public
	function test_value_retrieval_is_always_as_array(): void {
		Registry::push(
			"string",
			"value",
		);
		Registry::push(
			"int",
			1,
		);
		Registry::push(
			"float",
			1.2,
		);
		Registry::push(
			"object",
			$std_object = new stdClass(),
		);
		Registry::push(
			"array",
			["value"],
		);

		$this->assertEquals(
			["value"],
			Registry::get("string"),
		);
		$this->assertEquals(
			[1],
			Registry::get("int"),
		);
		$this->assertEquals(
			[1.2],
			Registry::get("float"),
		);
		$this->assertEquals(
			[$std_object],
			Registry::get("object"),
		);
		$this->assertEquals(
			[["value"]],
			Registry::get("array"),
		);

		$this->assertTrue(Registry::purgeAll());
		$this->expectException(UndefinedRegistryKeyException::class);
		Registry::get("string");
	}
}
