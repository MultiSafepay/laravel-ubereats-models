<?php

declare(strict_types=1);

namespace UbereatsModels\Menu;

use UbereatsModels\Enum\Helper;

enum DisplayType: string
{
    use Helper;

    case expanded = 'expanded';
    case collapsed = 'collapsed';
}
