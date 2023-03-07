<?php

declare(strict_types=1);

namespace UbereatsModels\Store;

use CastModels\Model;

class Integration extends Model
{
    public string $store_id;
    public bool $integration_enabled;
    public bool $is_order_manager;
    public string $integrator_store_id;
    public string $integrator_brand_id;
    public string $merchant_store_id;
    public string $store_configuration_data;
    public bool $order_release_enabled;
    public string $online_status;
}
