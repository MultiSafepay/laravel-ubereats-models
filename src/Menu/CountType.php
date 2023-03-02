<?php

declare(strict_types=1);

namespace UbereatsModels\Menu;

use UbereatsModels\Enum\Helper;

enum CountType: string
{
    use Helper;

    case custom = 'CUSTOM';
    case piece = 'PIECE';
    case slice = 'SLICE';
    case tablet = 'TABLET';
    case capsule = 'CAPSULE';
}
