<?php

declare(strict_types=1);

namespace UbereatsModels\Menu;

use CastModels\Model;
use Illuminate\Support\Collection;

class DietaryLabelInfo extends Model
{
    /** \UbereatsModels\Menu\DietaryLabels */
    public Collection $labels;
}
