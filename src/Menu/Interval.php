<?php

declare(strict_types=1);

namespace UbereatsModels\Menu;

use CastModels\Model;

class Interval extends Model
{
    public int $lower;
    public int $upper;
}
