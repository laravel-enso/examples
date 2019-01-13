<?php

namespace LaravelEnso\Examples\app\Enums;

use LaravelEnso\Helpers\app\Classes\Enum;

class SeniorityEnum extends Enum
{
    const Assistant = 1;
    const Associate = 2;
    const Staff = 3;
    const Senior = 4;
    const Partner = 5;

    protected static $data = [
        self::Assistant => 'assistant',
        self::Associate => 'associate',
        self::Staff => 'staff',
        self::Senior => 'senior',
        self::Partner => 'partner',
    ];
}
