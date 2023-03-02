<?php

declare(strict_types=1);

namespace UbereatsModels\Menu;

use UbereatsModels\Enum\Helper;

enum MenuEntityType: string
{
    use Helper;

    case item = 'ITEM';
    case modifierGroup = 'MODIFIER_GROUP';
}
