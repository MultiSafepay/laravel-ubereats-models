<?php

declare(strict_types=1);

namespace UbereatsModels\Order;

use CastModels\Model;
use Illuminate\Support\Collection;

class RemittanceInfo extends Model
{
    /** \UbereatsModels\Order\PayeeDetail */
    public Collection $uber;
    /** \UbereatsModels\Order\PayeeDetail */
    public Collection $restaurant;
    /** \UbereatsModels\Order\PayeeDetail */
    public Collection $courier;
    /** \UbereatsModels\Order\PayeeDetail */
    public Collection $eater;
}
