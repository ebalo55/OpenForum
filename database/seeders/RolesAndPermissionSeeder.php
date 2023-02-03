<?php

namespace Database\Seeders;

use App\Service\AuthorizationService;
use Illuminate\Database\Seeder;
use Spatie\Permission\PermissionRegistrar;

class RolesAndPermissionSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @param AuthorizationService $authorization_service
     *
     * @return void
     */
    public
    function run(
        AuthorizationService $authorization_service,
    ): void {
        // cleanup cache
        app(PermissionRegistrar::class)->forgetCachedPermissions();
        $authorization_service->createDefaultRoles();
    }
}
