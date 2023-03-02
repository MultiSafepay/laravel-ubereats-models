<?php

declare(strict_types=1);

namespace UbereatsModels\Menu;

use CastModels\Model;

class SellingOption extends Model
{
    public MeasurementUnit $sold_by_unit;
    public SellingQuantityConstraint $quantity_constraints;
    public PricedByToSoldByUnitConversionInfo $priced_by_to_sold_by_unit_conversion_info;
}
