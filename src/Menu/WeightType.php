<?php

declare(strict_types=1);

namespace UbereatsModels\Menu;

use UbereatsModels\Enum\Helper;

enum WeightType: string
{
    use Helper;

    case gram = 'METRIC_GRAM';
    case microgram = 'METRIC_MICROGRAM';
    case milligram = 'METRIC_MILLIGRAM';
    case kilogram = 'METRIC_KILOGRAM';
    case ton = 'METRIC_TON';
    case ounce = 'IMPERIAL_AVOIRDUPOIS_OUNCE';
    case pound = 'IMPERIAL_AVOIRDUPOIS_POUND';
}
