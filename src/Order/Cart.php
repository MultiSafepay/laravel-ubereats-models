<?php

declare(strict_types=1);

namespace UbereatsModels\Order;

use CastModels\Model;
use Illuminate\Support\Collection;

class Cart extends Model
{
    /** \UbereatsModels\Order\Item */
    public Collection $items;
    public string $special_instructions;
    /** \UbereatsModels\Order\FulfillmentIssue */
    public Collection $fulfillment_issues;
}
