<?php

declare(strict_types=1);

namespace UbereatsModels\Menu;

use UbereatsModels\Enum\Helper;

enum Type: string
{
    use Helper;

    case delivery = 'MENU_TYPE_FULFILLMENT_DELIVERY';
    case pickup = 'MENU_TYPE_FULFILLMENT_PICK_UP';
    case dine_in = 'MENU_TYPE_FULFILLMENT_DINE_IN';
}
