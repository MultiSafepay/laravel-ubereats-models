<?php

declare(strict_types=1);

namespace UbereatsModels\Menu;

use CastModels\Model;

class Suspension extends Model
{
    public int $suspend_until;
    public string $reason;
}
