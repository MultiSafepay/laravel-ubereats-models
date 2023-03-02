<?php

declare(strict_types=1);

namespace UbereatsModels\Menu;

use CastModels\Model;
use Illuminate\Support\Collection;

class SuspensionRules extends Model
{
    public Suspension $suspension;
    /** \UbereatsModels\Menu\SuspensionOverride */
    public Collection $overrides;
}
