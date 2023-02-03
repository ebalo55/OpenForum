<?php

namespace App\Settings;

use App\Enum\PasswordGenerationRules;
use Spatie\LaravelSettings\Settings;

class PasswordGenerationSettings extends Settings {
    /**
     * @var PasswordGenerationRules[]
     */
    public array $generation_rule;

    public static
    function group(): string {
        return 'password-generation';
    }
}
