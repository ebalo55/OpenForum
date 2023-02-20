<?php

namespace App\Providers;

use App\Data\NavigationRegistryData;
use App\Support\NavigationRegistry;
use Illuminate\Support\ServiceProvider;

class OpenForumServiceProvider extends ServiceProvider {
	/**
	 * Bootstrap services.
	 */
	public
	function boot() {}

	/**
	 * Register services.
	 */
	public
	function register() {
		NavigationRegistry::pushMany(
			[
				NavigationRegistryData::from(
					[
						"route_name" => "dashboard",
						"label"      => "Dashboard",
					],
				),
				NavigationRegistryData::from(
					[
						"route_name" => "settings.editor",
						"label"      => "Settings editor",
					],
				),
				NavigationRegistryData::from(
					[
						"route_name" => "users.index",
						"label"      => "Users",
					],
				),
				NavigationRegistryData::from(
					[
						"route_name" => "events.index",
						"label"      => "Event CMS",
					],
				),
				/*NavigationRegistryData::from(
					[
						"route_name" => "rbac.index",
						"label"      => "RBAC",
						"required_permissions"      => [
							Control::MANAGE_USER_ROLES()
						],
					],
				),*/
			],
		);
	}
}
