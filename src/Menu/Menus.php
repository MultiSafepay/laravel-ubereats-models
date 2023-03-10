<?php

declare(strict_types=1);

namespace UbereatsModels\Menu;

use CastModels\Model;
use Illuminate\Support\Collection;

class Menus extends Model
{
    /** \UbereatsModels\Menu\Menu */
    public Collection $menus;

    /** \UbereatsModels\Menu\Category */
    public Collection $categories;

    /** \UbereatsModels\Menu\Item */
    public Collection $items;

    /** \UbereatsModels\Menu\ModifierGroup */
    public Collection $modifier_groups;

    public string $menu_type;
}
