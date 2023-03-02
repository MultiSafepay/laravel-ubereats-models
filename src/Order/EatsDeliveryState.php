<?php

declare(strict_types=1);

namespace UbereatsModels\Order;

use UbereatsModels\Enum\Helper;

enum EatsDeliveryState: string
{
    use Helper;

    case scheduled = 'SCHEDULED';
    case en_route_to_pickup = 'EN_ROUTE_TO_PICKUP';
    case arrived_at_pickup = 'ARRIVED_AT_PICKUP';
    case en_route_to_dropoff = 'EN_ROUTE_TO_DROPOFF';
    case completed = 'COMPLETED';
    case failed = 'FAILED';
}
