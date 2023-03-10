<?php

declare(strict_types=1);

namespace UbereatsModels\Menu;

use CastModels\Model;
use Illuminate\Support\Collection;

class ModifierGroup extends Model
{
    public string $id;
    public string $external_data;
    public MultiLanguageText $title;
    public QuantityConstraintRules $quantity_info;

    /** \UbereatsModels\Menu\MenuEntity */
    public Collection $modifier_options;
    public string $display_type;
}
