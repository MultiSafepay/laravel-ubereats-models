<?php

declare(strict_types=1);

namespace UbereatsModels\Webhook;

use CastModels\Model;

class Webhook extends Model
{
    public string $event_type;
    public string $event_id;
    public int $event_time;
    public string $store_id;
    public bool $perform_refresh_menu;
    public string $resource_href;
    public WebhookMeta $meta;
}
