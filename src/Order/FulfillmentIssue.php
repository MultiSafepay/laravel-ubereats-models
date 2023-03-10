<?php

declare(strict_types=1);

namespace UbereatsModels\Order;

use CastModels\Model;

class FulfillmentIssue extends Model
{
    public string $fulfillment_issue_type;
    public string $fulfillment_action_type;
    public Item $root_item;
    public ItemAvailabilityInfo $item_availability_info;
    public Item $item_substitute;
}
