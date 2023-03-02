<?php

declare(strict_types=1);

namespace UbereatsModels\Order;

use CastModels\Model;

class TaxReporting extends Model
{
    public TaxBreakdown $breakdown;
    public TaxLocation $origin;
    public TaxLocation $destination;
}
