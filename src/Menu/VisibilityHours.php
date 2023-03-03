<?php

declare(strict_types=1);

namespace UbereatsModels\Menu;

use CastModels\Model;
use Illuminate\Support\Collection;

class VisibilityHours extends Model
{
    /** \UbereatsModels\Menu\ServiceAvailability */
    public Collection $hours_of_week;
}
