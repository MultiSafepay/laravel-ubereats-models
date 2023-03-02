<?php

declare(strict_types=1);

namespace UbereatsModels\Menu;

use CastModels\Model;

class Weight extends Model
{
    public WeightType $unit_type;
}
