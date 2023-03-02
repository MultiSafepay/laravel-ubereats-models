<?php

declare(strict_types=1);

namespace UbereatsModels\Menu;

use CastModels\Model;

class MenuEntity extends Model
{
    public string $id;
    public MenuEntityType $type;
}
