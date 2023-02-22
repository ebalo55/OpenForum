<?php

namespace App\Filament\Pages;

use App\Settings\PasswordGenerationSettings;
use Filament\Pages\SettingsPage;

class PasswordGenerationSettingsManager extends SettingsPage {

    protected static ?string $navigationGroup = "Settings";
    protected static ?string $navigationIcon = 'isax-broken.security-user';
    protected static ?int $navigationSort = 2;

    protected static string $settings = PasswordGenerationSettings::class;

    protected static ?string $title = "Password generation settings";

    protected
    function getFormSchema(): array {
        return [
            // ...
        ];
    }
}
