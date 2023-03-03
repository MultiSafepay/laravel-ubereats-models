<?php

declare(strict_types=1);

namespace UbereatsModels\Menu;

use CastModels\Model;

class ProductInfo extends Model
{
    public string $target_market;
    public string $gtin;
    public string $plu;
    public string $merchant_id;
    public string $product_type;
    /** @var array<string> $product_traits */
    public array $product_traits;
    /** @var array<string> $countries_of_origin */
    public array $countries_of_origin;
}
