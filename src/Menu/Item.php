<?php

declare(strict_types=1);

namespace UbereatsModels\Menu;

use CastModels\Model;
use Illuminate\Support\Collection;

class Item extends Model
{
    public string $id;
    public string $external_data;
    public MultiLanguageText $title;
    public MultiLanguageText $description;
    public string $image_url;
    public Price $price_info;
    public QuantityConstraintRules $quantity_info;
    public SuspensionRules $suspension_info;
    public ModifierGroupsRules $modifier_group_ids;
    public TaxInfo $tax_info;
    public NutritionalInfo $nutritional_info;
    public DishInfo $dish_info;
    public VisibilityInfo $visibility_info;
    public TaxLabelsRuleSet $tax_label_info;
    public ProductInfo $product_info;
    /** \UbereatsModels\Menu\BundledItems */
    public Collection $bundled_items;
    public BeverageInfo $beverage_info;
    public PhysicalPropertiesInfo $physical_properities_info;
    public MedicationInfo $medication_info;
    public SellingInfo $selling_info;
}
