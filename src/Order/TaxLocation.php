<?php

declare(strict_types=1);

namespace UbereatsModels\Order;

use CastModels\Model;

class TaxLocation extends Model
{
    public string $id;
    public string $country_iso2;
    public string $postal_code;
}
