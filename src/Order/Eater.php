<?php

declare(strict_types=1);

namespace UbereatsModels\Order;

use CastModels\Model;

class Eater extends Model
{
    public string $id;
    public string $first_name;
    public string $last_name;
    public string $phone;
    public string $phone_code;
    public Delivery $delivery;
}
