<?php

declare(strict_types=1);

namespace UbereatsModels\Menu;

use UbereatsModels\Enum\Helper;

enum VolumeUnit: string
{
    use Helper;

    case ounce = 'VOLUME_UNIT_TYPE_US_FLUID_OUNCE';
    case liter = 'VOLUME_UNIT_TYPE_METRIC_LITER';
    case milliliter = 'VOLUME_UNIT_TYPE_METRIC_MILLILITER';
}
