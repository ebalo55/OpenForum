<?php

namespace App\Providers;

use App\Models\Activity;
use App\Models\EventDay;
use App\Models\PersonalAccessToken;
use App\Models\Reservation;
use App\Models\User;
use App\Service\AuthorizationService;
use App\Service\BulkService;
use App\Service\EventDaysService;
use App\Service\LivewireBannerService;
use App\Service\LivewireScrollService;
use App\Service\SettingsService;
use App\Service\UserService;
use App\Settings\GeneralSettings;
use App\Transformers\NullTransformer;
use Illuminate\Support\Facades\Vite;
use Illuminate\Support\ServiceProvider;
use Laravel\Sanctum\Sanctum;
use Spatie\Fractal\Fractal;
use Spatie\PrefixedIds\PrefixedIds;

class AppServiceProvider extends ServiceProvider {
    /**
     * All the container singletons that should be registered.
     *
     * @var array
     */
    public array $singletons = [
        AuthorizationService::class  => AuthorizationService::class,
        BulkService::class           => BulkService::class,
        SettingsService::class       => SettingsService::class,
        UserService::class           => UserService::class,
        LivewireBannerService::class => LivewireBannerService::class,
        LivewireScrollService::class => LivewireScrollService::class,
        EventDaysService::class      => EventDaysService::class,
    ];

    /**
     * Bootstrap any application services.
     */
    public
    function boot(): void {
        Sanctum::usePersonalAccessTokenModel(PersonalAccessToken::class);

        Fractal::macro(
            "success",
            function(): Fractal {
                return Fractal::create(
                    [],
                    NullTransformer::class,
                )->limitRecursion(5)
                              ->addMeta(
                                  [
                                      "site_name" => app(GeneralSettings::class)->site_name,
                                      "success"   => true,
                                      "errors"    => null,
                                  ],
                              );
            },
        );

        Fractal::macro(
            "error",
            function(array $errors): Fractal {
                return Fractal::create(
                    [],
                    NullTransformer::class,
                )->limitRecursion(5)
                              ->addMeta(
                                  [
                                      "site_name" => app(GeneralSettings::class)->site_name,
                                      "success"   => false,
                                      "errors"    => $errors,
                                  ],
                              );
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
        PrefixedIds::registerModels(
            [
                "usr_"   => User::class,
                "evt_"   => EventDay::class,
                "act_"   => Activity::class,
                "resrv_" => Reservation::class,
            ],
        );
    }
}
