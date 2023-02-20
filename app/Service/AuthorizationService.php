<?php

namespace App\Service;

use App\Enum\InternalRoles;
use App\Enum\Permissions\Classes\Event;
use App\Enum\Permissions\PermissionClasses;
use App\Models\User;
use JetBrains\PhpStorm\ArrayShape;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

final
class AuthorizationService extends BaseService {
    /**
     * Assign to the given user the default admin role
     *
     * @param User $user
     *
     * @return void
     */
    public
    function assignDefaultAdminRole(
        User $user,
    ): void {
        $user->syncRoles(InternalRoles::ADMIN());
    }

    /**
     * Assign to the given user the default user role
     *
     * @param User $user
     *
     * @return void
     */
    public
    function assignDefaultUserRole(
        User $user,
    ): void {
	    $user->syncRoles(InternalRoles::USER());
    }

    /**
     * Create the default roles with associated permissions.
     * This method is team agnostic, it create the default roles and permission for the current team instance if it is
     * defined otherwise acts on the global team space
     *
     * @return void
     */
    public
    function createDefaultRoles(): void {
        $default_roles = $this->defaultRolesWithPermissions();

        foreach ($default_roles as $role_name => $permission_names) {
            // automatically inherit the global team id
            $role = Role::firstOrCreate(
                [
                    "name" => $role_name,
                ],
            );

            foreach ($permission_names as $permission_name) {
                // automatically inherit the global team id
                Permission::firstOrCreate(
                    [
                        "name" => $permission_name,
                    ],
                );
            }

            // here all permissions have been created if needed
            $role->givePermissionTo($permission_names);
        }
    }

    /**
     * Returns an array of default role names and their default permissions
     *
     * @return array
     */
    #[ArrayShape([
        "super-admin" => "string[]",
        "admin"       => "string[]",
        "user"        => "string[]",
    ])]
    public
    function defaultRolesWithPermissions(): array {
        return [
            InternalRoles::SUPER_ADMIN() => [],
            InternalRoles::ADMIN()       => [
                ...PermissionClasses::EVENT->collect(),
            ],
            InternalRoles::USER()        => [
	            ...PermissionClasses::EVENT->collect()->only([Event::RESERVE()]),
            ],
        ];
    }

    public
    function __construct() {}
}
