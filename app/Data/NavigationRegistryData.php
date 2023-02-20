<?php

namespace App\Data;

use Spatie\LaravelData\Data;

class NavigationRegistryData extends Data {
	/**
	 * Check if the given instance can be viewed by the current user
	 *
	 * @return bool
	 */
	public
	function canBeViewed(): bool {
		return empty($this->required_permissions) || auth()->user()->can($this->required_permissions);
	}

	public
	function __construct(
		public string $route_name,
		public string $label,
		public array  $required_permissions = [],
	) {}
}
