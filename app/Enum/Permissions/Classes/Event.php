<?php

namespace App\Enum\Permissions\Classes;

use App\Enum\Metadata\Description;
use App\Trait\SerializableEnum;
use ArchTech\Enums\Meta\Meta;

/**
 * @method string description()
 * @method static string RESERVE()
 * @method static string CREATE()
 * @method static string UPDATE()
 * @method static string DELETE()
 * @method static string EXPORT()
 */
#[Meta(Description::class)]
enum Event: string {
    use SerializableEnum;

    #[Description("Allows the reservation of a spot for the user in one or more events")]
    case RESERVE = "event.reserve";
    #[Description("Allows the reading of events' data")]
    case READ    = "event.read";
    #[Description("Allows the creation of events")]
    case CREATE  = "event.create";
    #[Description("Allows the update of events")]
    case UPDATE  = "event.update";
    #[Description("Allows the deletion of events")]
    case DELETE  = "event.delete";
    #[Description("Allows the export of data from events and their relations")]
    case EXPORT  = "event.export";
}
