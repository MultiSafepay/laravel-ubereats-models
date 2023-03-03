<?php

declare(strict_types=1);

namespace UbereatsModels\Menu;

use CastModels\Model;

class TimePeriod extends Model
{
    public string $start_time;
    public string $end_time;
}
