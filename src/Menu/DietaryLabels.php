<?php

declare(strict_types=1);

namespace UbereatsModels\Menu;

use UbereatsModels\Enum\Helper;

enum DietaryLabels: string
{
    use Helper;
    
    case vegan = 'VEGAN';
    case vegetarian = 'VEGETARIAN';
    case gluten_free = 'GLUTEN_FREE';
}
