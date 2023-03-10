<?php

declare(strict_types=1);

namespace UbereatsModels\Order;

use CastModels\Model;

class Allergen extends Model
{
    public string $type;
    public string $freeform_text;
}
