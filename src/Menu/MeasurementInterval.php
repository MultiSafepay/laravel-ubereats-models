<?php

declare(strict_types=1);

namespace App\Models\Cast\Menus;

namespace UbereatsModels\Menu;

use CastModels\Model;

class MeasurementInterval extends Model
{
    public Interval $interval;
    public WeightInterval $weight_interval;
    public VolumeInterval $volume_interval;
    public CountInterval $count_interval;
}
