<?php

declare(strict_types=1);

namespace UbereatsModels\Order;

use UbereatsModels\Enum\Helper;

enum Scope: string
{
    use Helper;

    case store = 'eats.store';
    case store_status_write = 'eats.store.status.write';
    case order = 'eats.order';
    case order_read = 'eats.store.orders.read';
    case order_report = 'eats.report';
    case pos_provisioning = 'eats.pos_provisioning';
}
