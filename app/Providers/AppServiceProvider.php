<?php

namespace App\Providers;

use App\Service\AuthorizationService;
use App\Service\BulkService;
use App\Service\SettingsService;
use App\Service\UserService;
use App\Transformers\NullTransformer;
use Illuminate\Support\Facades\Vite;
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
        BulkService::class          => BulkService::class,
        SettingsService::class      => SettingsService::class,
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
                return Fractal::create(
                    [],
                    NullTransformer::class,
                )->addMeta(["success" => false, "errors" => $errors]);
            },
        );

        Vite::macro(
            'image',
            fn($asset) => Vite::asset("resources/assets/images/{$asset}"),
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
