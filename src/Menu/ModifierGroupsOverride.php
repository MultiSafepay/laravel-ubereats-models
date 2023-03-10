<?php

declare(strict_types=1);

namespace UbereatsModels\Menu;

use CastModels\Model;

class ModifierGroupsOverride extends Model
{
    public string $context_type;
    public string $context_value;

    /** @var array<string> $ids */
    public array $ids;
}
