<?php

declare(strict_types=1);

namespace UbereatsModels\Enum;

enum Allergen: string
{
    use Helper;

    case diary = 'DAIRY';
    case eggs = 'EGGS';
    case fish = 'FISH';
    case shellfish = 'SHELLFISH';
    case treenuts = 'TREENUTS';
    case peanuts = 'PEANUTS';
    case gluten = 'GLUTEN';
    case soy = 'SOY';
    case other = 'OTHER';
}
