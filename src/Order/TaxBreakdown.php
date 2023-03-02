<?php

declare(strict_types=1);

namespace UbereatsModels\Order;

use CastModels\Model;
use Illuminate\Support\Collection;

class TaxBreakdown extends Model
{
    /** \UbereatsModels\Order\TaxInfo */
    public Collection $items;
    /** \UbereatsModels\Order\TaxInfo */
    public Collection $fees;
    /** \UbereatsModels\Order\TaxInfo */
    public Collection $promotions;
}
