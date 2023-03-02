<?php

declare(strict_types=1);

namespace UbereatsModels\Order;

use UbereatsModels\Enum\Helper;

enum JurisdictionLevel: string
{
    use Helper;

    case city = 'CITY';
    case state = 'STATE';
    case county = 'COUNTY';
    case district = 'DISTRICT';
}
