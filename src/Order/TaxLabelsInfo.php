<?php

declare(strict_types=1);

namespace UbereatsModels\Order;

use CastModels\Model;

class TaxLabelsInfo extends Model
{
    /** @var array<string> $labels */
    public array $labels;
    /** @var array<string> $source */
    public array $source;
}
