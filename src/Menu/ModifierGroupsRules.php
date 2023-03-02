<?php

declare(strict_types=1);

namespace UbereatsModels\Menu;

use CastModels\Model;

class ModifierGroupsRules extends Model
{
    /** @var array<string> $ids */
    public array $ids;
    public ModifierGroupsOverride $overrides;
}
