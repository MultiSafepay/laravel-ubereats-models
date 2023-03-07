<?php

declare(strict_types=1);

namespace UbereatsModels\Webhook;

use CastModels\Model;

class WebhookMeta extends Model
{
    public string $client_id;
    public string $resource_id;
    public string $status;
    public string $user_id;
    public int $webhook_msg_timestamp;
    public string $webhook_msg_uuid;
}
