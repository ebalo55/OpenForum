<?php

namespace Database\Seeders;

use App\Enum\InternalRoles;
use App\Models\User;
use App\Service\AuthorizationService;
use App\Service\UserService;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder {
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
        $user = User::query()
                    ->whereEmail("ebalo@insane-dev.tips")
                    ->first();

        if (!$user) {
            $user = app(UserService::class)->create(
	            "ebalo",
	            config("open-forum.super_admin_psw"),
	            "ebalo@insane-dev.tips",
            );
            $user->email_verified_at = now();
            $user->save();

            // this is mainly for testing purpose but anyway can be useful if somehow the super admin account does not work
            $authorization_service->assignDefaultAdminRole($user);
            $user->assignRole(InternalRoles::SUPER_ADMIN());
        }
    }
}
