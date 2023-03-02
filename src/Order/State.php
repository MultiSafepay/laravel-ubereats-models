<?php

declare(strict_types=1);

namespace UbereatsModels\Order;

use UbereatsModels\Enum\Helper;

enum State: string
{
    use Helper;

    case created = 'CREATED';
    case accepted = 'ACCEPTED';
    case denied = 'DENIED';
    case finished = 'FINISHED';
    case canceled = 'CANCELED';
    case unknown = 'UNKNOWN';
}
