<?php

declare(strict_types=1);

namespace UbereatsModels\Menu;

use UbereatsModels\Enum\Helper;

enum VolumeType: string
{
    use Helper;

    case litre = 'METRIC_LITRE';
    case milliliter = 'METRIC_MILLILITRE';
    case ounce = 'IMPERIAL_FLUID_OUNCE';
    case pint = 'IMPERIAL_PINT';
    case gallon = 'IMPERIAL_GALLON';
    case quart = 'IMPERIAL_QUART';
    case cup = 'IMPERIAL_CUP';
    case tableSpoon = 'IMPERIAL_TABLESPOON';
    case teaSpoon = 'IMPERIAL_TEASPOON';
}
