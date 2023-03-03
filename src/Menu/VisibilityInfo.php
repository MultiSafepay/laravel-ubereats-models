<?php

declare(strict_types=1);

namespace UbereatsModels\Menu;

use CastModels\Model;
use Illuminate\Support\Collection;

class VisibilityInfo extends Model
{
    public string $start_date;
    public string $end_date;
    /** \UbereatsModels\Menu\VisibilityHours */
    public Collection $hours;
}
