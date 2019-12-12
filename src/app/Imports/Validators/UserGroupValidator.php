<?php

namespace LaravelEnso\Examples\app\Imports\Validators;

use LaravelEnso\DataImport\app\Services\Validators\Validator;
use LaravelEnso\Helpers\app\Classes\Obj;

class UserGroupValidator extends Validator
{
    public function run(Obj $row)
    {
        // do custom validation logic
        // $this->addError(string $error) to register errors as many times as you need

        \Log::info($row);
    }
}
