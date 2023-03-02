<?php

declare(strict_types=1);

namespace UbereatsModels\Order;

use UbereatsModels\Enum\Helper;

enum Brand: string
{
    use Helper;

    case uber_eats = 'UBER_EATS';
    case postmates = 'POSTMATES';
}
