<?php

declare(strict_types=1);

namespace UbereatsModels\Order;

use CastModels\Model;

class Charges extends Model
{
    public Money $total;
    public Money $sub_total;
    public Money $tax;
    public Money $total_fee;
    public Money $total_fee_tax;
    public Money $bag_fee;
    public Money $total_promo_applied;
    public Money $sub_total_promo_applied;
    public Money $tax_promo_applied;
    public Money $pick_and_pack_fee;
    public Money $delivery_fee;
    public Money $delivery_fee_tax;
    public Money $small_order_fee;
    public Money $small_order_fee_tax;
    public Money $tip;
    public Money $cash_amount_due;
}
