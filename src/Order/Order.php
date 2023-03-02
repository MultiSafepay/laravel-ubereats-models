<?php

declare(strict_types=1);

namespace UbereatsModels\Order;

use Illuminate\Support\Collection;
use CastModels\Model;

class Order extends Model
{
    public string $id;
    public string $uuid;
    public string $external_reference_id;
    public State $current_state;
    public Type $type;
    public Brand $brand;
    public Store $store;
    public Eater $eater;
    /** \UbereatsModels\Order\Eater */
    public Collection $eaters;
    public Cart $cart;
    public Payment $payment;
    public Packaging $packaging;
    public string $placed_at;
    public string $estimated_ready_for_pickup_at;
    /** \UbereatsModels\Order\EatsDelivery */
    public Collection $deliveries;
    public string $order_manager_client_id;
}
