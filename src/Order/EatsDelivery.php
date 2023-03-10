<?php

declare(strict_types=1);

namespace UbereatsModels\Order;

use CastModels\Model;

class EatsDelivery extends Model
{
    public string $id;
    public string $first_name;
    public Vehicle $vehicle;
    public string $picture_url;
    public string $estimated_pickup_time;
    public string $current_state;
    public string $phone;
    public string $phone_code;
}
