<?php

declare(strict_types=1);

namespace UbereatsModels\Menu;

use CastModels\Model;

class SellingQuantityConstraint extends Model
{
    public int $min_permitted;
    public int $max_permitted;
    public int $increment;
    public int $default_quantity;
}
