<?php

declare(strict_types=1);

namespace UbereatsModels\Order;

use CastModels\Model;

class Jurisdiction extends Model
{
    public JurisdictionLevel $level;
    public string $name;
}
