<?php

declare(strict_types=1);

namespace UbereatsModels\Menu;

use CastModels\Model;

class PhysicalPropertiesInfo extends Model
{
    public bool $reusable_packaging;
    public string $storage_instructions;
}
