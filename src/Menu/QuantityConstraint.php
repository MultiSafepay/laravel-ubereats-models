<?php

declare(strict_types=1);

namespace UbereatsModels\Menu;

use CastModels\Model;

class QuantityConstraint extends Model
{
    public int $min_permitted;
    public int $max_permitted;
    public bool $is_min_permitted_optional;
    public int $default_quantity;
    public int $charge_above;
    public int $refund_under;
    public int $min_permitted_unique;
    public int $max_permitted_unique;
}
