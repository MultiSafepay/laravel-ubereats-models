<?php

declare(strict_types=1);

namespace UbereatsModels\Order;

use CastModels\Model;

class PayeeDetail extends Model
{
    public Money $value;
}
