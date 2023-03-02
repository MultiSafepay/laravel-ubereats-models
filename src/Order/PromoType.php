<?php

declare(strict_types=1);

namespace UbereatsModels\Order;

use UbereatsModels\Enum\Helper;

enum PromoType: string
{
    use Helper;

    case flat_off = 'FLATOFF';
    case percent_off = 'PERCENTOFF';
    case free_item_minbasket = 'FREEITEM_MINBASKET';
    case category_discount = 'CATEGORY_DISCOUNT';
    case bogo = 'BOGO';
    case free_delivery = 'FREEDELIVERY';
}
