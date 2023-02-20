<?php

namespace Tests\Feature\Livewire\Users;

use App\Enum\InternalRoles;
use App\Facade\AuthorizationServiceFacade;
use App\Http\Livewire\Users\Details;
use App\Models\User;
use Livewire\Livewire;
use Tests\TestCase;

class DetailsTest extends TestCase {
	public
	function test_can_downgrade_user_role() {
		$component = Livewire::test(
			Details::class,
			["user" => $user = User::factory()->create()],
		);

		AuthorizationServiceFacade::assignDefaultAdminRole($user);
		$user->refresh();
		$this->assertTrue($user->hasRole(InternalRoles::ADMIN()));
		$this->assertFalse($user->hasRole(InternalRoles::USER()));

		$component->call("downgrade");

		$user->refresh();

		$this->assertFalse($user->hasRole(InternalRoles::ADMIN()));
		$this->assertTrue($user->hasRole(InternalRoles::USER()));

		$component->assertDispatchedBrowserEvent("banner.success");
		$component->assertNotDispatchedBrowserEvent("banner.error");
	}

	public
	function test_can_elevate_user_role() {
		$component = Livewire::test(
			Details::class,
			["user" => $user = User::factory()->create()],
		);

		AuthorizationServiceFacade::assignDefaultUserRole($user);
		$user->refresh();
		$this->assertFalse($user->hasRole(InternalRoles::ADMIN()));
		$this->assertTrue($user->hasRole(InternalRoles::USER()));

		$component->call("elevate");

		$user->refresh();

		$this->assertTrue($user->hasRole(InternalRoles::ADMIN()));
		$this->assertFalse($user->hasRole(InternalRoles::USER()));

		$component->assertDispatchedBrowserEvent("banner.success");
		$component->assertNotDispatchedBrowserEvent("banner.error");
	}

	public
	function test_can_update_user_data() {
		$component = Livewire::test(
			Details::class,
			["user" => $user = User::factory()->create()],
		);

		$this->assertNotEquals(
			"test",
			$user->name,
		);
		$this->assertNotEquals(
			"test@example.com",
			$user->email,
		);

		$component->set(
			"user.name",
			"test",
		)->set(
			"user.email",
			"test@example.com",
		)->call("save");

		$user->refresh();

		$this->assertEquals(
			"test",
			$user->name,
		);
		$this->assertEquals(
			"test@example.com",
			$user->email,
		);

		$component->assertDispatchedBrowserEvent("banner.success");
	}

	public
	function test_cannot_downgrade_super_admin() {
		$component = Livewire::test(
			Details::class,
			["user" => $user = User::factory()->create()],
		);

		$user->syncRoles(InternalRoles::SUPER_ADMIN());
		$user->refresh();
		$this->assertTrue($user->hasRole(InternalRoles::SUPER_ADMIN()));
		$this->assertFalse($user->hasRole(InternalRoles::ADMIN()));
		$this->assertFalse($user->hasRole(InternalRoles::USER()));

		$component->call("downgrade");

		$user->refresh();

		$this->assertTrue($user->hasRole(InternalRoles::SUPER_ADMIN()));
		$this->assertFalse($user->hasRole(InternalRoles::ADMIN()));
		$this->assertFalse($user->hasRole(InternalRoles::USER()));

		$component->assertNotDispatchedBrowserEvent("banner.success");
		$component->assertDispatchedBrowserEvent("banner.error");
	}

	public
	function test_cannot_elevate_super_admin() {
		$component = Livewire::test(
			Details::class,
			["user" => $user = User::factory()->create()],
		);

		$user->syncRoles(InternalRoles::SUPER_ADMIN());
		$user->refresh();
		$this->assertTrue($user->hasRole(InternalRoles::SUPER_ADMIN()));
		$this->assertFalse($user->hasRole(InternalRoles::ADMIN()));
		$this->assertFalse($user->hasRole(InternalRoles::USER()));

		$component->call("elevate");

		$user->refresh();

		$this->assertTrue($user->hasRole(InternalRoles::SUPER_ADMIN()));
		$this->assertFalse($user->hasRole(InternalRoles::ADMIN()));
		$this->assertFalse($user->hasRole(InternalRoles::USER()));

		$component->assertNotDispatchedBrowserEvent("banner.success");
		$component->assertDispatchedBrowserEvent("banner.error");
	}

	public
	function test_the_component_can_render() {
		$component = Livewire::test(
			Details::class,
			["user" => $user = User::factory()->create()],
		);

		$component->assertStatus(200);
	}
}
