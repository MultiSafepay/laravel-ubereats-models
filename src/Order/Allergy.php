<?php

declare(strict_types=1);

namespace UbereatsModels\Order;

use CastModels\Model;
use Illuminate\Support\Collection;

class Allergy extends Model
{
    /** \UbereatsModels\Order\Allergen */
    public Collection $allergens_to_exclude;
    public string $allergy_instructions;
}
