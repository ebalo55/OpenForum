<?php

namespace App\Enum\Permissions;

use App\Enum\Metadata\Collectable;
use App\Enum\Metadata\Permissions;
use App\Enum\Permissions\Classes\Event;
use App\Enum\Permissions\Classes\Management;
use App\Enum\Permissions\Classes\User;
use App\Trait\SerializableEnum;
use ArchTech\Enums\Meta\Meta;
use Illuminate\Support\Collection;

/**
 * @method string[] permissions()
 * @method Collection<string> collect()
 *
 * @method static string EVENT()
 * @method static string CONTROL()
 * @method static string USER()
 */
#[Meta(Permissions::class, Collectable::class)]
enum PermissionClasses: string {
    use SerializableEnum;

    #[Permissions(Event::class), Collectable(Event::class)]
    case EVENT   = "event";
    #[Permissions(Management::class), Collectable(Management::class)]
    case CONTROL = "control";
    #[Permissions(User::class), Collectable(User::class)]
    case USER    = "user";
}
