<?php

namespace App\Providers;

use App\Service\AuthorizationService;
use App\Service\UserService;
use Illuminate\Support\ServiceProvider;
use Spatie\Fractal\Fractal;

class AppServiceProvider extends ServiceProvider {
    /**
     * All the container singletons that should be registered.
     *
     * @var array
     */
    public array $singletons = [
        AuthorizationService::class => AuthorizationService::class,
        UserService::class          => UserService::class,
    ];

    /**
     * Bootstrap any application services.
     */
    public
    function boot(): void {
        Fractal::macro(
            "success",
            function(): Fractal {
                return Fractal::create(
                    [],
                    NullTransformer::class,
                )->addMeta(["success" => true, "errors" => null]);
            },
        );

        Fractal::macro(
            "error",
            function(array $errors): Fractal {
                /** @var Fractal $this */
                return Fractal::create(
                    [],
                    NullTransformer::class,
                )->addMeta(["success" => false, "errors" => $errors]);
            },
        );
    }

    /**
     * Register any application services.
     */
    public
    function register(): void {
        //
    }
}
