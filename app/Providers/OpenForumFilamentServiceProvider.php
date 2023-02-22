<?php

namespace App\Providers;

use Filament\Facades\Filament;
use Filament\Navigation\NavigationGroup;
use Filament\Navigation\NavigationItem;
use Illuminate\Support\ServiceProvider;

class OpenForumFilamentServiceProvider extends ServiceProvider {
    /**
     * Bootstrap services.
     */
    public
    function boot(): void {
        $this->registerCustomNavigationLinks();
        $this->customizeGroups();

        $this->registerAdditionalAssets();
    }

    /**
     * Register services.
     */
    public
    function register(): void {}

    public
    function registerAdditionalAssets() {
        Filament::serving(
            function() {
                // Using Vite
                Filament::registerViteTheme('resources/css/filament.css');
            },
        );
    }

    private
    function customizeGroups() {
        Filament::serving(
            function() {
                Filament::registerNavigationGroups(
                    [
                        NavigationGroup::make()
                                       ->label('Settings')
                                       ->icon('isax-broken.setting'),
                        NavigationGroup::make()
                                       ->label('Documentation')
                                       ->icon('isax-broken.book')
                                       ->collapsed(),
                    ],
                );
            },
        );
    }

    private
    function registerCustomNavigationLinks() {
        Filament::serving(
            function() {
                Filament::registerNavigationItems(
                    [
                        NavigationItem::make('Online documentation')
                                      ->url(
                                          'https://openforum-docs.override.sh/',
                                          true,
                                      )
                                      ->icon('isax-broken.book')
                                      ->activeIcon('heroicon-s-presentation-chart-line')
                                      ->group('Documentation')
                                      ->sort(3),
                        NavigationItem::make('API reference')
                                      ->url(
                                          '/docs/index.html',
                                          true,
                                      )
                                      ->icon('isax-broken.book')
                                      ->activeIcon('heroicon-s-presentation-chart-line')
                                      ->group('Documentation')
                                      ->sort(3),
                    ],
                );
            },
        );
    }
}
