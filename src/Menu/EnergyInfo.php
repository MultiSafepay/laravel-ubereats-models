<?php

declare(strict_types=1);

namespace UbereatsModels\Menu;

use CastModels\Model;

class EnergyInfo extends Model
{
    public int $lower_range;
    public int $upper_range;
    public EnergyInfoType $display_type;
}
