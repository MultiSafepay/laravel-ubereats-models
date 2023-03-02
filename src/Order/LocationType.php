<?php

declare(strict_types=1);

namespace UbereatsModels\Order;

use UbereatsModels\Enum\Helper;

enum LocationType: string
{
    use Helper;

    case street_address = 'STREET_ADDRESS';
    case google_place = 'GOOGLE_PLACE';
}
