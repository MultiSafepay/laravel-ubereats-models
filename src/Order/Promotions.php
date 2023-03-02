<?php

declare(strict_types=1);

namespace UbereatsModels\Order;

use CastModels\Model;
use Illuminate\Support\Collection;

class Promotions extends Model
{
    /** \UbereatsModels\Order\Promotion */
    public Collection $promotions;
}
