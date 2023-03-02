<?php

declare(strict_types=1);

namespace UbereatsModels\Order;

use UbereatsModels\Enum\Helper;

enum TaxInfoType: string
{
    use Helper;

    case delivery_fee = 'DELIVERY_FEE';
    case service_fee = 'SERVICE_FEE';
    case small_order_fee = 'SMALL_ORDER_FEE';
    case delivery_fee_correction = 'DELIVERY_FEE_CORRECTION';
    case merchant_service_fee = 'MERCHANT_SERVICE_FEE';
    case pick_and_pack_fee = 'PICK_AND_PACK_FEE';
    case priority_delivery_fee = 'PRIORITY_DELIVERY_FEE';
    case _update_dropoff_location = 'UPDATE_DROPOFF_LOCATION';
    case delivery_fee_promotion = 'DELIVERY_FEE_PROMOTION';
    case item_promotion = 'ITEM_PROMOTION';
    case item = 'ITEM';
}
