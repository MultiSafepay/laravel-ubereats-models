<?php

declare(strict_types=1);

namespace UbereatsModels\Order;

use UbereatsModels\Enum\Helper;

enum DeliveryType: string
{
    use Helper;

    case deliver_to_door = 'DELIVER_TO_DOOR';
    case curbside = 'CURBSIDE';
    case leave_at_door = 'LEAVE_AT_DOOR';
}
