<?php

namespace App\Providers;

use App\Actions\Jetstream\DeleteUser;
use App\Enum\Permissions\Classes\User;
use App\Enum\Permissions\PermissionClasses;
use Illuminate\Support\ServiceProvider;
use Laravel\Jetstream\Jetstream;

class JetstreamServiceProvider extends ServiceProvider {
    /**
     * Bootstrap any application services.
     */
    public
    function boot(): void {
        $this->configurePermissions();

        Jetstream::deleteUsersUsing(DeleteUser::class);
    }

    /**
     * Register any application services.
     */
    public
    function register(): void {
        //
    }

    /**
     * Configure the permissions that are available within the application.
     */
    protected
    function configurePermissions(): void {
        Jetstream::defaultApiTokenPermissions(
            PermissionClasses::USER->collect()
                                   ->filter(
                                       fn(string $user_permission) => $user_permission !== User::READ_CURRENT(),
                                   )
                                   ->toArray(),
        );

        Jetstream::permissions(
            [
                ...PermissionClasses::USER->permissions(),
            ],
        );
    }
}
