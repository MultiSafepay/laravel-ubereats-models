<?php

declare(strict_types=1);

namespace UbereatsModels\Menu;

use UbereatsModels\Enum\Helper;

enum EnergyInfoType: string
{
    use Helper;

    case singleItem = 'single_item';
    case doubleItems = 'double_items';
    case additiveItem = 'additive_item';
    case multipleItems = 'multiple_items';
}
