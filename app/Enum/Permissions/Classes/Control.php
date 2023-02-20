<?php

namespace App\Enum\Permissions\Classes;

use App\Enum\Metadata\Description;
use App\Trait\SerializableEnum;
use ArchTech\Enums\Meta\Meta;

/**
 * @method string description()
 * @method static string RESET()
 * @method static string MANAGE_USER_ROLES()
 */
#[Meta(Description::class)]
enum Control: string {
	use SerializableEnum;

	#[Description("Allows the full reset of the database")]
	case RESET             = "control.reset";
	#[Description("Allows the management and assignation of roles to users")]
	case MANAGE_USER_ROLES = "control.manage_users";
}
