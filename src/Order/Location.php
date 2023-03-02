<?php

declare(strict_types=1);

namespace UbereatsModels\Order;

use CastModels\Model;

class Location extends Model
{
    public LocationType $type;
    public string $street_address;
    public float $latitude;
    public float $longitude;
    public string $google_place_id;
    public string $unit_number;
    public string $business_name;
    public string $title;
}
