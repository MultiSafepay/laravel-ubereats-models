<?php

declare(strict_types=1);

namespace UbereatsModels\Order;

use UbereatsModels\Enum\Helper;

enum FulfillmentIssueType: string
{
    use Helper;

    case out_of_item = 'OUT_OF_ITEM';
    case partial_availability = 'PARTIAL_AVAILABILITY';
}
