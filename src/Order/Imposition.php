<?php

declare(strict_types=1);

namespace UbereatsModels\Order;

use CastModels\Model;

class Imposition extends Model
{
    public string $description;
    public string $name;
}
