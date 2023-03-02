<?php

declare(strict_types=1);

namespace UbereatsModels\Enum;

enum EventTypes: string
{
    use Helper;

    case store_provisioned = 'store.provisioned';
    case store_deprovisioned = 'store.deprovisioned';
    case order_notification = 'orders.notification';
    case order_cancel = 'orders.cancel';
    case report_success = 'eats.report.success';
}
