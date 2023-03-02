<?php

declare(strict_types=1);

namespace UbereatsModels\Menu;

use CastModels\Model;
use Illuminate\Support\Collection;

class VisibilityInfo extends Model
{
    /** \UbereatsModels\Menu\VisibilityHours */
    public Collection $hours;
}
