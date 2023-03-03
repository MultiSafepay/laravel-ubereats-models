<?php

declare(strict_types=1);

namespace UbereatsModels\Menu;

use CastModels\Model;
use UbereatsModels\Enum\Weekday;

class ServiceAvailability extends Model
{
    public Weekday $day_of_week;
    public TimePeriods $time_periods;
}
