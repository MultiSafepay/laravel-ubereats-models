<?php

declare(strict_types=1);

namespace UbereatsModels\Menu;

use CastModels\Model;

class NutritionalInfo extends Model
{
    public EnergyInfo $calories;
    public EnergyInfo $kilojoules;
    public MeasurementInterval $serving_size;
    public int $number_of_servings;
    public MeasurementInterval $net_quantity;
    public EnergyInfo $calories_per_serving;
    public EnergyInfo $kilojoules_per_serving;
    public NutrientInfo $fat;
    public NutrientInfo $saturated_fat;
    public NutrientInfo $carbohydrates;
    public NutrientInfo $sugar;
    public NutrientInfo $protein;
    public NutrientInfo $salt;
    /** @var array<string> $allergens */
    public array $allergens;
}
