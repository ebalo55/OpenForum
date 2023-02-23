<?php

use App\Enum\PasswordGenerationRules;
use Spatie\LaravelSettings\Migrations\SettingsMigration;

class CreatePasswordGenerationSettings extends SettingsMigration {
    public
    function up(): void {
        $this->migrator->add(
            "password-generation.generation_rule",
            \Illuminate\Support\Arr::map(
                [
                    PasswordGenerationRules::FIRST_LETTER_OF_LAST_NAME(),
                    PasswordGenerationRules::BIRTH_DATE(),
                    PasswordGenerationRules::FIRST_NAME(),
                    PasswordGenerationRules::LAST_LETTER_OF_LAST_NAME(),
                    PasswordGenerationRules::FORUM_YEAR(),
                    PasswordGenerationRules::AT(),
                    PasswordGenerationRules::LAST_NAME(),
                    PasswordGenerationRules::BIRTH_YEAR(),
                ],
                fn(string $value) => ["rule" => $value],
            ),
        );
    }
}
