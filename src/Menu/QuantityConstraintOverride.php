<?php

declare(strict_types=1);

namespace UbereatsModels\Menu;

use CastModels\Model;

class QuantityConstraintOverride extends Model
{
    public string $context_type;
    public string $context_value;
    public QuantityConstraint $quantity;
}
