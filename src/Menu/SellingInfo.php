<?php

declare(strict_types=1);

namespace UbereatsModels\Menu;

use CastModels\Model;
use Illuminate\Support\Collection;

class SellingInfo extends Model
{
    /** \UbereatsModels\Menu\SellingOption */
    public Collection $selling_options;
}
