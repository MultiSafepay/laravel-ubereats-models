<?php

declare(strict_types=1);

namespace UbereatsModels\Order;

use CastModels\Model;

class ItemAvailabilityInfo extends Model
{
    public int $items_requested;
    public int $items_available;
}
