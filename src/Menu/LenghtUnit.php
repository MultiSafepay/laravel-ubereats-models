<?php

declare(strict_types=1);

namespace UbereatsModels\Menu;

use UbereatsModels\Enum\Helper;

enum LengthUnit: string
{
    use Helper;

    case meter = 'LENGTH_UNIT_TYPE_METRIC_METER';
    case millimeter = 'LENGTH_UNIT_TYPE_METRIC_MILLIMETER';
    case centimeter = 'LENGTH_UNIT_TYPE_METRIC_CENTIMETER';
}
