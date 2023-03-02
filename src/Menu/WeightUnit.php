<?php

declare(strict_types=1);

namespace UbereatsModels\Menu;

use UbereatsModels\Enum\Helper;

enum WeightUnit: string
{
    use Helper;

    case kilogram = 'WEIGHT_UNIT_TYPE_METRIC_KILOGRAM';
    case gram = 'WEIGHT_UNIT_TYPE_METRIC_GRAM';
    case melligram = 'WEIGHT_UNIT_TYPE_METRIC_MILLIGRAM';
    case pound = 'WEIGHT_UNIT_TYPE_IMPERIAL_POUND';
    case ounce = 'WEIGHT_UNIT_TYPE_IMPERIAL_OUNCE';
}
