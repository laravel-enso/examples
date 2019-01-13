<?php

namespace LaravelEnso\Examples\app\Imports\Validators;

use LaravelEnso\DataImport\app\Classes\Validators\Validator;

class UserGroupValidator extends Validator
{
    public function run(Obj $row)
    {
        // do custom validation logic
        // $this->addError(string $error) to register errors as many times as you need
    }
}
