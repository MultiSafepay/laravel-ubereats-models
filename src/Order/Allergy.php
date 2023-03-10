<?php

declare(strict_types=1);

namespace UbereatsModels\Order;

use CastModels\Model;

class Allergy extends Model
{
    /** @var string[] $allergens_to_exclude */
    public array $allergens_to_exclude;
    public string $allergy_instructions;
}
