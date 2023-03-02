<?php

declare(strict_types=1);

namespace UbereatsModels\Order;

use UbereatsModels\Enum\Helper;

enum DeliveryStatus: string
{
    use Helper;

    case started = 'started';
    case arriving = 'arriving';
    case delivered = 'delivered';
}
