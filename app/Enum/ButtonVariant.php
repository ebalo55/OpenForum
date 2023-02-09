<?php

namespace App\Enum;

use App\Trait\SerializableEnum;

/**
 * @method static string BUTTON()
 * @method static string LINK()
 */
enum ButtonVariant {
    use SerializableEnum;

    case BUTTON;
    case LINK;
}
