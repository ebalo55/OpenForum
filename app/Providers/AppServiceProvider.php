<?php

namespace App\Providers;

use App\Models\Activity;
use App\Models\EventDay;
use App\Models\PersonalAccessToken;
use App\Models\Reservation;
use App\Models\User;
use App\Service\AuthorizationService;
use App\Service\BulkService;
use App\Service\LivewireBannerService;
use App\Service\SettingsService;
use App\Service\UserService;
use App\Transformers\NullTransformer;
use Illuminate\Auth\Notifications\VerifyEmail;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\URL;
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
                              ->addMeta(["success" => true, "errors" => null]);
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

        VerifyEmail::createUrlUsing(
            fn(User $notifiable) => URL::temporarySignedRoute(
                'verification.verify',
                Carbon::now()->addMinutes(
                    Config::get(
                        'auth.verification.expire',
                        60,
                    ),
                ),
                [
                    'id' => $notifiable->prefixed_id,
                    'hash' => sha1($notifiable->getEmailForVerification()),
                ],
            ),
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
