<?php

declare(strict_types=1);

namespace UbereatsModels\Order;

use CastModels\Model;

class Money extends Model
{
    public int $amount;
    public string $currency_code;
    public string $formatted_amount;
}
