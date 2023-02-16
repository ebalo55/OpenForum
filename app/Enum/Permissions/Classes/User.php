<?php

namespace App\Enum\Permissions\Classes;

use App\Trait\SerializableEnum;

/**
 * @method static string READ_CURRENT()
 * @method static string EXTERNAL__LOGIN()
 * @method static string EXTERNAL__EMAIL_VERIFICATION()
 * @method static string EXTERNAL__EMAIL_VERIFICATION__REQUEST_NEW()
 */
enum User: string {
    use SerializableEnum;

    case READ_CURRENT                              = "user.current.read";
    case EXTERNAL__LOGIN                           = "user.external.login";
    case EXTERNAL__EMAIL_VERIFICATION              = "user.external.verify_email";
    case EXTERNAL__EMAIL_VERIFICATION__REQUEST_NEW = "user.external.verify_email.request_new";
}
