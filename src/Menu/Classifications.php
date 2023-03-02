<?php

declare(strict_types=1);

namespace UbereatsModels\Menu;

use CastModels\Model;

class Classifications extends Model
{
    public bool $can_serve_alone;
    public bool $is_vegetarian;
    public int $alcoholic_items;
    public DietaryLabelInfo $dietary_label_info;
    public string $instructions_for_use;

    /** @var array<string> $ingredients */
    public array $ingredients;

    /** @var array<string> $additives */
    public array $additives;
    public string $preparation_type;
    public FoodBusinessOperator $food_business_operator;
    public bool $is_high_fat_salt_sugar;
}
