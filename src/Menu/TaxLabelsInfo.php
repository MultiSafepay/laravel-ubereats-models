<?php

declare(strict_types=1);

namespace UbereatsModels\Menu;

use CastModels\Model;

class TaxLabelsInfo extends Model
{
    /** @var array<string> $labels */
    public array $labels;
    public string $source;
}
