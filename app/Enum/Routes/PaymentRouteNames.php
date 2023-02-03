<?php

namespace App\Enum\Routes;

use App\Trait\SerializableEnum;

enum PaymentRouteNames: string {
    use SerializableEnum;

    case BILLING_PORTAL  = "payments.billing_portal";
    case CHECKOUT_STATUS = "payments.checkout.status";
}
