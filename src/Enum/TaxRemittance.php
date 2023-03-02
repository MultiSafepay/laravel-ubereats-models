<?php

declare(strict_types=1);

namespace UbereatsModels\Enum;

enum TaxRemittance: string
{
    use Helper;

    case uber = 'UBER';
    case merchant = 'MERCHANT';
}
