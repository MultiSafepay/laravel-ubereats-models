<?php

declare(strict_types=1);

namespace UbereatsModels\Menu;

use CastModels\Model;

class CountInterval extends Model
{
    public Interval $interval;
    public Count $count;
}
