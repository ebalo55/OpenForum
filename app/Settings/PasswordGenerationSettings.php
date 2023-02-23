<?php

namespace App\Settings;

use Spatie\LaravelSettings\Settings;

class PasswordGenerationSettings extends Settings {
    public array $generation_rule;

    public static
    function group(): string {
        return 'password-generation';
    }
}
