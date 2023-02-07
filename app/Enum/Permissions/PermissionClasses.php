<?php

namespace App\Enum\Permissions;

use App\Enum\Metadata\Collectable;
use App\Enum\Metadata\Permissions;
use App\Enum\Permissions\Classes\Control;
use App\Enum\Permissions\Classes\Event;
use App\Trait\SerializableEnum;
use ArchTech\Enums\Meta\Meta;
use Illuminate\Support\Collection;

/**
 * @method string[] permissions()
 * @method Collection<string> collect()
 *
 * @method static string EVENT()
 * @method static string CONTROL()
 */
#[Meta(Permissions::class, Collectable::class)]
enum PermissionClasses: string {
    use SerializableEnum;

    #[Permissions(Event::class), Collectable(Event::class)]
    case EVENT   = "event";
    #[Permissions(Control::class), Collectable(Control::class)]
    case CONTROL = "control";
}
