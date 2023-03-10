<?php

declare(strict_types=1);

namespace UbereatsModels\Order;

use CastModels\Model;

class MerchantDelivery extends Model
{
    public Location $location;
    public string $type;
    public string $notes;
}
