<?php

declare(strict_types=1);

namespace UbereatsModels\Order;

use CastModels\Model;

class Accounting extends Model
{
    public TaxRemittance $tax_remittance;
    public TaxReporting $tax_reporting;
}
