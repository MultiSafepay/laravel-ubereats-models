<?php

declare(strict_types=1);

namespace UbereatsModels\Order;

use CastModels\Model;

class Packaging extends Model
{
    public DisposableItems $disposable_items;
}
