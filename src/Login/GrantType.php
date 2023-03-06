<?php

declare(strict_types=1);

namespace UbereatsModels\Login;

use UbereatsModels\Enum\Helper;

enum GrantType: string
{
    use Helper;

    case client_credentials = 'client-credentials';
    case authorization_code = 'authorization-code';
}
