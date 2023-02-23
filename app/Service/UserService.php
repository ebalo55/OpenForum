<?php

namespace App\Service;

use App\Enum\PasswordGenerationRules;
use App\Enum\Permissions\Classes\User as UserPermissions;
use App\Models\PersonalAccessToken;
use App\Models\User;
use App\Settings\GeneralSettings;
use App\Settings\PasswordGenerationSettings;
use Carbon\Carbon;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

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
     * @param array|null $generation_rule_override
     *
     * @return string
     */
    public
    function generatePassword(
        string $full_name,
        Carbon $birth_date,
        ?array $generation_rule_override = null,
    ): string {
        $name_fragments = explode(
            " ",
            $full_name,
        );

        $psw = "";
        foreach (($generation_rule_override ?? app(PasswordGenerationSettings::class)->generation_rule) as $rule) {
            // filament provides array as of repeaters exit value, extract the value we want from the array
            if (is_array($rule)) {
                $rule = array_values($rule)[0];
            }

            // cast the rule back to the enum
            $rule = PasswordGenerationRules::from($rule);

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
                PasswordGenerationRules::UNDERSCORE       => "_",
                PasswordGenerationRules::AT               => "@",
                PasswordGenerationRules::DOT              => ".",
                PasswordGenerationRules::AND              => "&",
                PasswordGenerationRules::PIPE             => "|",
                PasswordGenerationRules::PLUS             => "+",
                PasswordGenerationRules::STAR             => "*",
                PasswordGenerationRules::COMMA            => ",",
                PasswordGenerationRules::DOLLAR           => "$",
                PasswordGenerationRules::DOUBLE_QUOTE     => "\"",
                PasswordGenerationRules::QUOTE            => "'",
                PasswordGenerationRules::EXCLAMATION_MARK => "!",
                PasswordGenerationRules::QUESTION_MARK    => "?",
                PasswordGenerationRules::EQUAL            => "=",
            };
        }

        return $psw;
    }

    /**
     * Gets or creates and return the token that can be sent to external front-ends in order to authenticate as the user
     *
     * @param User $user
     *
     * @return string
     */
    public
    function getFrontEndAccessToken(
        User $user,
    ): string {
        // check if an external front-end token is already defined, if it is return its plaintext representation
        if ($token = $user->tokens()->whereName("front-end")->first()) {
            /** @var PersonalAccessToken $token */
            return $token->plain_token;
        }

        // if no front-end token is defined then create a new one and return it
        $token = $user->createToken(
            "front-end",
            [
                UserPermissions::READ_CURRENT(),
            ],
        );

        // as this is an external front-end token store its plaintext representation in the db
        /** @var PersonalAccessToken $model */
        $model = $token->accessToken;
        $model->plain_token = $token->plainTextToken;
        $model->save();

        return $token->plainTextToken;
    }

    /**
     * Returns a standardized masked representation of the user email
     *
     * @param User $user
     *
     * @return string
     */
    public
    function maskEmail(
        User $user,
    ): string {
        return Str::mask(
            $user->email,
            "*",
            3,
        );
    }

    public
    function __construct(
        private readonly AuthorizationService $authorization_service,
    ) {}
}
