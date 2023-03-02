<?php

declare(strict_types=1);

namespace UbereatsModels\Order;

use CastModels\Model;

class Vehicle extends Model
{
    public string $make;
    public string $model;
    public string $color;
    public string $license_plate;
}
