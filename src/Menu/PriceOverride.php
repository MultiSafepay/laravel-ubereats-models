<?php

declare(strict_types=1);

namespace UbereatsModels\Menu;

use CastModels\Model;

class PriceOverride extends Model
{
    public string $context_type;
    public string $context_value;
    public int $price = 0;
    public int $core_price = 0;
}
