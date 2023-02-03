<?php

namespace App\Enum\Permissions\Classes;

use App\Enum\Metadata\Description;
use App\Trait\SerializableEnum;
use ArchTech\Enums\Meta\Meta;

/**
 * @method string description()
 * @method static string REGISTER()
 * @method static string CREATE()
 * @method static string UPDATE()
 * @method static string DELETE()
 */
#[Meta(Description::class)]
enum Control: string {
    use SerializableEnum;

    #[Description("Allows the full reset of the database")]
    case RESET = "event.register";
}
