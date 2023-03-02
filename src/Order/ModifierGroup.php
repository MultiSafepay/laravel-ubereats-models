<?php

declare(strict_types=1);

namespace UbereatsModels\Order;

use CastModels\Model;
use Illuminate\Support\Collection;

class ModifierGroup extends Model
{
    public string $id;
    public string $title;
    public string $external_data;
    /** \UbereatsModels\Order\Item */
    public Collection $selected_items;
    /** \UbereatsModels\Order\Item */
    public Collection $removed_items;
}
