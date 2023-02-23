<?php

namespace App\Enum\Permissions\Classes;

use App\Enum\Metadata\Description;
use App\Trait\SerializableEnum;
use ArchTech\Enums\Meta\Meta;

/**
 * @method string description()
 * @method static string RESET()
 * @method static string USER_ROLES()
 * @method static string GENERAL_SETTINGS()
 * @method static string CRITICAL_SETTINGS()
 * @method static string PASSWORD_GENERATION_SETTINGS()
 */
#[Meta(Description::class)]
enum Management: string {
    use SerializableEnum;

    #[Description("Allows the full reset of the database")]
    case RESET                        = "manage.reset";
    #[Description("Allows the management and assignation of roles to users")]
    case USER_ROLES                   = "manage.users";
    #[Description("Allows the management general settings")]
    case GENERAL_SETTINGS             = "manage.settings.general";
    #[Description("Allows the management critical settings")]
    case CRITICAL_SETTINGS            = "manage.settings.critical";
    #[Description("Allows the management of password generation settings")]
    case PASSWORD_GENERATION_SETTINGS = "manage.settings.password_generation";
}
