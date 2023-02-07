<?php

namespace App\Service;

use App\Enum\PasswordGenerationRules;
use App\Models\User;
use App\Settings\GeneralSettings;
use App\Settings\PasswordGenerationSettings;
use Carbon\Carbon;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Hash;

final
class UserService extends BaseService {
    /**
     * Creates a fully featured user
     *
     *
     * @param string $name
     * @param string $password
     * @param string|null $email
     *
     * @return User
     */
    public
    function create(
        string  $name,
        string  $password,
        ?string $email = null,
    ): User {
        $user = $this->createMinimal(
            $name,
            $password,
            $email,
        );

        // assign default platform roles
        $this->authorization_service->assignDefaultUserRole($user);

        return $user;
    }

    /**
     * Create a new minimal user instance
     *
     * @param string $name
     * @param string $password
     * @param string|null $email
     *
     * @return User
     */
    public
    function createMinimal(
        string  $name,
        string  $password,
        ?string $email = null,
    ): User {
        return User::query()
                   ->create(
                       [
                           "name"     => $name,
                           "email"    => $email,
                           "password" => Hash::make($password),
                       ],
                   );
    }

    /**
     * Generates a predictable password given the application generation rules
     *
     * @param string $full_name
     * @param Carbon $birth_date
     *
     * @return string
     */
    public
    function generatePassword(
        string $full_name,
        Carbon $birth_date,
    ): string {
        $name_fragments = explode(
            " ",
            $full_name,
        );

        $psw = "";
        foreach (app(PasswordGenerationSettings::class)->generation_rule as $rule) {
            $psw .= match ($rule) {
                PasswordGenerationRules::FIRST_NAME                => Arr::first($name_fragments),
                PasswordGenerationRules::LAST_NAME                 => Arr::last($name_fragments),
                PasswordGenerationRules::FIRST_LETTER_OF_NAME      => Arr::first($name_fragments)[0],
                PasswordGenerationRules::LAST_LETTER_OF_NAME       => Arr::last(str_split(Arr::first($name_fragments))),
                PasswordGenerationRules::FIRST_LETTER_OF_LAST_NAME => Arr::last($name_fragments)[0],
                PasswordGenerationRules::LAST_LETTER_OF_LAST_NAME  => Arr::last(str_split(Arr::last($name_fragments))),
                PasswordGenerationRules::BIRTH_DATE                => $birth_date->format("d"),
                PasswordGenerationRules::BIRTH_MONTH               => $birth_date->format("m"),
                PasswordGenerationRules::BIRTH_YEAR                => $birth_date->format("Y"),
                PasswordGenerationRules::FORUM_YEAR                => app(
                                                                          GeneralSettings::class,
                                                                      )->registration_enabled_from?->format("Y")
                                                                      ??
                                                                      app(
                                                                          GeneralSettings::class,
                                                                      )->registration_enabled_to?->format("Y")
                                                                      ??
                                                                      now()->format("Y"),
                PasswordGenerationRules::DASH                      => "-",
                PasswordGenerationRules::UNDERSCORE                => "_",
                PasswordGenerationRules::AT                        => "@",
                PasswordGenerationRules::DOT                       => ".",
                PasswordGenerationRules::AND                       => "&",
                PasswordGenerationRules::PIPE                      => "|",
                PasswordGenerationRules::PLUS                      => "+",
                PasswordGenerationRules::STAR                      => "*",
                PasswordGenerationRules::COMMA                     => ",",
                PasswordGenerationRules::DOLLAR                    => "$",
                PasswordGenerationRules::DOUBLE_QUOTE              => "\"",
                PasswordGenerationRules::QUOTE                     => "'",
                PasswordGenerationRules::EXCLAMATION_MARK          => "!",
                PasswordGenerationRules::QUESTION_MARK             => "?",
                PasswordGenerationRules::EQUAL                     => "=",
            };
        }

        return $psw;
    }

    public
    function __construct(
        private readonly AuthorizationService $authorization_service,
    ) {}
}
