<?php

declare(strict_types=1);

namespace UbereatsModels\Order;

use CastModels\Model;
use Illuminate\Support\Collection;

class Promotion extends Model
{
    public string $external_promotion_id;
    public string $promo_type;
    public int $promo_discount_value;
    public int $promo_discount_percentage;
    public int $promo_delivery_fee_value;
    /** \UbereatsModels\Order\DiscountItem */
    public Collection $discount_items;
}
