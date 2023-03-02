<?php

declare(strict_types=1);

namespace UbereatsModels\Menu;

use CastModels\Model;

class WeightInterval extends Model
{
    public Interval $interval;
    public Weight $weight;
}
