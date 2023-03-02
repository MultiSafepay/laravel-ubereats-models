<?php

declare(strict_types=1);

namespace UbereatsModels\Menu;

use CastModels\Model;

class VisibilityHours extends Model
{
    public string $start_date;
    public string $end_date;
    public ServiceAvailability $hours_of_week;
}
