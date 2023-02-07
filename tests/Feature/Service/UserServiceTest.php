<?php

namespace Tests\Feature\Service;

use App\Enum\InternalRoles;
use App\Enum\PasswordGenerationRules;
use App\Service\UserService;
use App\Settings\PasswordGenerationSettings;
use Carbon\Carbon;
use Tests\TestCase;

class UserServiceTest extends TestCase {
    public
    function test_can_create_minimal_user(): void {
        $user = app(UserService::class)->createMinimal(
            $this->faker->name,
            "password",
        );

        $this->assertModelExists($user);
        $this->assertFalse($user->hasRole(InternalRoles::USER()));
    }

    public
    function test_can_create_user_without_email(): void {
        $user = app(UserService::class)->create(
            $this->faker->name,
            "password",
        );

        $this->assertModelExists($user);
        $this->assertTrue($user->hasRole(InternalRoles::USER()));
    }

    public
    function test_can_generate_user_password(): void {
        $setting = app(PasswordGenerationSettings::class);
        $setting->generation_rule = [
            PasswordGenerationRules::FIRST_NAME,
            PasswordGenerationRules::LAST_NAME,
            PasswordGenerationRules::FIRST_LETTER_OF_NAME,
            PasswordGenerationRules::LAST_LETTER_OF_NAME,
            PasswordGenerationRules::FIRST_LETTER_OF_LAST_NAME,
            PasswordGenerationRules::LAST_LETTER_OF_LAST_NAME,
            PasswordGenerationRules::BIRTH_DATE,
            PasswordGenerationRules::BIRTH_MONTH,
            PasswordGenerationRules::BIRTH_YEAR,
            PasswordGenerationRules::FORUM_YEAR,
            PasswordGenerationRules::DASH,
            PasswordGenerationRules::UNDERSCORE,
            PasswordGenerationRules::AT,
            PasswordGenerationRules::DOT,
            PasswordGenerationRules::AND,
            PasswordGenerationRules::PIPE,
            PasswordGenerationRules::PLUS,
            PasswordGenerationRules::STAR,
            PasswordGenerationRules::COMMA,
            PasswordGenerationRules::DOLLAR,
            PasswordGenerationRules::DOUBLE_QUOTE,
            PasswordGenerationRules::QUOTE,
            PasswordGenerationRules::EXCLAMATION_MARK,
            PasswordGenerationRules::QUESTION_MARK,
            PasswordGenerationRules::EQUAL,
        ];

        $setting->save();

        Carbon::setTestNow(
            Carbon::create(
                2023,
                1,
                1,
                0,
                0,
                0,
            ),
        );

        $this->assertEquals(
            "ab" . // PasswordGenerationRules::FIRST_NAME,
            "ef" . // PasswordGenerationRules::LAST_NAME,
            "a" . // PasswordGenerationRules::FIRST_LETTER_OF_NAME,
            "b" . // PasswordGenerationRules::LAST_LETTER_OF_NAME,
            "e" . // PasswordGenerationRules::FIRST_LETTER_OF_LAST_NAME,
            "f" . // PasswordGenerationRules::LAST_LETTER_OF_LAST_NAME,
            "01" . // PasswordGenerationRules::BIRTH_DATE,
            "01" . // PasswordGenerationRules::BIRTH_MONTH,
            "2000" . // PasswordGenerationRules::BIRTH_YEAR,
            "2023" . // PasswordGenerationRules::FORUM_YEAR,
            "-" . // PasswordGenerationRules::DASH,
            "_" . // PasswordGenerationRules::UNDERSCORE,
            "@" . // PasswordGenerationRules::AT,
            "." . // PasswordGenerationRules::DOT,
            "&" . // PasswordGenerationRules::AND,
            "|" . // PasswordGenerationRules::PIPE,
            "+" . // PasswordGenerationRules::PLUS,
            "*" . // PasswordGenerationRules::STAR,
            "," . // PasswordGenerationRules::COMMA,
            "$" . // PasswordGenerationRules::DOLLAR,
            "\"" . // PasswordGenerationRules::DOUBLE_QUOTE,
            "'" . // PasswordGenerationRules::QUOTE,
            "!" . // PasswordGenerationRules::EXCLAMATION_MARK,
            "?" . // PasswordGenerationRules::QUESTION_MARK,
            "="
            // PasswordGenerationRules::EQUAL,
            ,
            app(UserService::class)->generatePassword(
                "ab cd ef",
                Carbon::create(
                    2000,
                    1,
                    1,
                ),
            ),
        );
    }
}
