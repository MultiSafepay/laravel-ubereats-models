<?php

declare(strict_types=1);

namespace UbereatsModels\Menu;

use CastModels\Model;

class BundledItems extends Model
{
    public string $item_id;
    public int $core_price;
    public int $included_quantity;
}
