<?php

declare(strict_types=1);

namespace UbereatsModels\Menu;

enum OverrideContext : string
{
    case menu = 'MENU';
    case item = 'ITEM';
    case modifierGroup = 'MODIFIER_GROUP';
}
