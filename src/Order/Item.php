<?php

declare(strict_types=1);

namespace UbereatsModels\Order;

use CastModels\Model;
use Illuminate\Support\Collection;

class Item extends Model
{
    public string $id;
    public string $instance_id;
    public string $title;
    public string $external_data;
    public int $quantity;
    public ItemPrice $price;
    /** \UbereatsModels\Order\ModifierGroup */
    public Collection $selected_modifier_groups;
    /** \UbereatsModels\Order\SpecialRequest */
    public Collection $special_requests;
    public int $default_quantity;
    public string $special_instructions;
    public FulfillmentAction $fulfillment_action;
    public string $eater_id;
    public TaxLabelsInfo $tax_info;
}
