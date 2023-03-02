<?php

declare(strict_types=1);

namespace UbereatsModels\Order;

use CastModels\Model;

class Store extends Model
{
    public string $id;
    public string $name;
    public string $integrator_store_id;
    public string $integrator_brand_id;
    public string $merchant_store_id;
}
