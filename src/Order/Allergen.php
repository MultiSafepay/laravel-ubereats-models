<?php

declare(strict_types=1);

namespace UbereatsModels\Order;

use UbereatsModels\Enum\Allergen as EnumAllergen;
use CastModels\Model;

class Allergen extends Model
{
    public EnumAllergen $type;
    public string $freeform_text;
}
