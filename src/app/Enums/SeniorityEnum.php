<?php

namespace LaravelEnso\Examples\app\Enums;

use LaravelEnso\Enums\app\Services\Enum;

class SeniorityEnum extends Enum
{
    public const Assistant = 1;
    public const Associate = 2;
    public const Staff = 3;
    public const Senior = 4;
    public const Partner = 5;

    protected static $data = [
        self::Assistant => 'assistant',
        self::Associate => 'associate',
        self::Staff => 'staff',
        self::Senior => 'senior',
        self::Partner => 'partner',
    ];
}
