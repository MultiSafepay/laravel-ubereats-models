<?php

declare(strict_types=1);

namespace UbereatsModels\Menu;

use CastModels\Model;

class SuspensionOverride extends Model
{
    public OverrideContext $context_type;
    public string $context_value;
    public Suspension $suspension;
}
