<?php

declare(strict_types=1);

namespace UbereatsModels\Webhook;

use CastModels\Model;
use UbereatsModels\Enum\EventTypes;

class Webhook extends Model
{
    public EventTypes $event_type;
    public string $event_id;
    public int $event_time;
    public string $store_id;
    public bool $perform_refresh_menu;
    public string $resource_href;
    public WebhookMeta $meta;
}
