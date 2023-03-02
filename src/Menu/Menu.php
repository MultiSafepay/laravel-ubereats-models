<?php

declare(strict_types=1);

namespace UbereatsModels\Menu;

use CastModels\Model;
use Illuminate\Support\Collection;

class Menu extends Model
{
    public string $id;
    public MultiLanguageText $title;
    public MultiLanguageText $subtitle;

    /** @var array<string> $category_ids */
    public array $category_ids;
    /** \UbereatsModels\Menu\ServiceAvailability */
    public Collection $service_availability;
}
