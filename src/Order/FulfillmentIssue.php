<?php

declare(strict_types=1);

namespace UbereatsModels\Order;

use CastModels\Model;

class FulfillmentIssue extends Model
{
    public FulfillmentIssueType $fulfillment_issue_type;
    public FulfillmentActionType $fulfillment_action_type;
    public Item $root_item;
    public ItemAvailabilityInfo $item_availability_info;
    public Item $item_substitute;
}
