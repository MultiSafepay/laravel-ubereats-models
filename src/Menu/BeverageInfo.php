<?php

declare(strict_types=1);

namespace UbereatsModels\Menu;

use CastModels\Model;

class BeverageInfo extends Model
{
    public int $caffeine_amount;
    public int $alcohol_by_volume;
    public CoffeeInfo $coffee_info;
}
