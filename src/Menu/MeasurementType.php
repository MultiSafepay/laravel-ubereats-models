<?php

declare(strict_types=1);

namespace UbereatsModels\Menu;

use UbereatsModels\Enum\Helper;

enum MeasurementType: string
{
    use Helper;

    case count = 'MEASUREMENT_TYPE_COUNT';
    case weight = 'MEASUREMENT_TYPE_WEIGHT';
    case volume = 'MEASUREMENT_TYPE_VOLUME';
    case length = 'MEASUREMENT_TYPE_LENGTH';
}
