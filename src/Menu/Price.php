<?php

declare(strict_types=1);

namespace UbereatsModels\Menu;

use CastModels\Model;
use Illuminate\Support\Collection;

class Price extends Model
{
    public int $price = 0;
    public int $core_price;
    public int $container_deposit;
    /** \UbereatsModels\Menu\PriceOverride */
    public Collection $overrides;
}
