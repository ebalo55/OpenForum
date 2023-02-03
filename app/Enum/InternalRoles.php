<?php

namespace App\Enum;

use App\Trait\SerializableEnum;

/**
 * @method static string SUPER_ADMIN()
 * @method static string ADMIN()
 * @method static string USER()
 */
enum InternalRoles: string {
    use SerializableEnum;

    case SUPER_ADMIN = "super-admin";
    case ADMIN       = "admin";
    case USER        = "user";
}
