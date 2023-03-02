<?php

declare(strict_types=1);

namespace UbereatsModels\Store;

use UbereatsModels\Enum\Helper;

enum Status: string
{
    use Helper;

    case active = 'active';
    case pending_review = 'pending_review';
    case deleted = 'deleted';
    case rejected = 'rejected';
}
