<?php

declare(strict_types=1);

namespace UbereatsModels\Menu;

use CastModels\Model;
use Illuminate\Support\Collection;

class Category extends Model
{
    public string $id;
    public MultiLanguageText $title;
    public MultiLanguageText $subtitle;

    /** \UbereatsModels\Menu\MenuEntity */
    public Collection $entities;
}
