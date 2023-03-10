<?php

declare(strict_types=1);

namespace UbereatsModels\Menu;

use CastModels\Model;

class MeasurementUnit extends Model
{
    public string $measurement_type;
    public string $length_unit;
    public string $weight_unit;
    public string $volume_unit;
}
