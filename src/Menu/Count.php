<?php

declare(strict_types=1);

namespace UbereatsModels\Menu;

use CastModels\Model;

class Count extends Model
{
    public CountType $unit_type;
    public string $custom_unit;
}
