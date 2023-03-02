<?php

declare(strict_types=1);

namespace UbereatsModels\Order;

use CastModels\Model;
use UbereatsModels\Order\Allergy;

class SpecialRequest extends Model
{
    public Allergy $allergy;
}
