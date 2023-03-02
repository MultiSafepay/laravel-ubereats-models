<?php

declare(strict_types=1);

namespace UbereatsModels\Enum;

enum Weekday: string
{
    use Helper;

    case monday = 'monday';
    case tuesday = 'tuesday';
    case wednesday = 'wednesday';
    case thursday = 'thursday';
    case friday = 'friday';
    case saturday = 'saturday';
    case sunday = 'sunday';
}
