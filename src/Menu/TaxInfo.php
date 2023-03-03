<?php

declare(strict_types=1);

namespace UbereatsModels\Menu;

use CastModels\Model;

class TaxInfo extends Model
{
    public int $tax_rate;
    public int $vat_rate_percentage;
}
