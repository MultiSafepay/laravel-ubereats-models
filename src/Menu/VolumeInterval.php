<?php

declare(strict_types=1);

namespace UbereatsModels\Menu;

use CastModels\Model;

class VolumeInterval extends Model
{
    public Interval $interval;
    public Volume $volume;
}
