<?php

declare(strict_types=1);

namespace UbereatsModels\Order;

use CastModels\Model;
use Illuminate\Support\Collection;

class TaxInfo extends Model
{
    public string $instance_id;
    public string $type;
    public Money $gross_amount;
    public Money $net_amount;
    public Money $total_tax;
    /** \UbereatsModels\Order\Tax */
    public Collection $taxes;
}
