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
enum Event: string {
    use SerializableEnum;

    #[Description("Allows the registration of the user to one or more events in one or more days")]
    case REGISTER = "event.register";
    #[Description("Allows the creation of events")]
    case CREATE   = "event.create";
    #[Description("Allows the update of events")]
    case UPDATE   = "event.update";
    #[Description("Allows the deletion of events")]
    case DELETE   = "event.delete";
}
