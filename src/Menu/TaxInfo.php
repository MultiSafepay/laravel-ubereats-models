<?php

declare(strict_types=1);

namespace UbereatsModels\Menu;

use CastModels\Model;

class TaxInfo extends Model
{
    public float $tax_rate = 0.0;
    public float $vat_rate_percentage = 0.0;
}
