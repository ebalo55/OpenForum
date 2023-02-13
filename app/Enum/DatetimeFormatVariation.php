<?php

namespace App\Enum;

use App\Trait\SerializableEnum;

enum DatetimeFormatVariation {
    use SerializableEnum;

    case DATETIME;
    case DATE;
    case TIME;
}
