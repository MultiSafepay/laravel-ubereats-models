<?php

declare(strict_types=1);

namespace UbereatsModels\Order;

use UbereatsModels\Order\DeliveryType;
use CastModels\Model;

class MerchantDelivery extends Model
{
    public Location $location;
    public DeliveryType $type;
    public string $notes;
}
