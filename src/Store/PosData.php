<?php

declare(strict_types=1);

namespace UbereatsModels\Store;

use CastModels\Model;

class PosData extends Model
{
    public bool $integration_enabled;
    public string $order_manager_client_id;
    public string $integrator_store_id;
    public string $integrator_brand_id;
    public string $store_configuration_data;
    public bool $is_order_manager_pending;
}
