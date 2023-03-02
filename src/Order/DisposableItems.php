<?php

declare(strict_types=1);

namespace UbereatsModels\Order;

use CastModels\Model;

class DisposableItems extends Model
{
    public bool $should_include;
}
