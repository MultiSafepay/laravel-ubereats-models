<?php

declare(strict_types=1);

namespace UbereatsModels\Menu;

use CastModels\Model;

class MeasurementUnit extends Model
{
    public MeasurementType $measurement_type;
    public LengthUnit $length_unit;
    public WeightUnit $weight_unit;
    public VolumeUnit $volume_unit;
}
