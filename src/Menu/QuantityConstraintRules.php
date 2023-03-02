<?php

declare(strict_types=1);

namespace UbereatsModels\Menu;

use CastModels\Model;
use Illuminate\Support\Collection;

class QuantityConstraintRules extends Model
{
	public QuantityConstraint $quantity;

    /** \UbereatsModels\Menu\QuantityConstraintOverride */
	public Collection $overrides;
}
