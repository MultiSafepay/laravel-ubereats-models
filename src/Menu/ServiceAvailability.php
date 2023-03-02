<?php

declare(strict_types=1);

namespace UbereatsModels\Menu;

use CastModels\Model;
use Illuminate\Support\Collection;
use UbereatsModels\Enum\Weekday;

class ServiceAvailability extends Model
{
    public Weekday $day_of_week;
    /** \UbereatsModels\Menu\TimePeriod */
    public Collection $time_periods;
}
