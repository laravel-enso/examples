<?php

namespace LaravelEnso\Examples\app\Http\Controllers;

use App\Http\Controllers\Controller;
use LaravelEnso\Examples\app\Models\Example;
use LaravelEnso\Select\app\Traits\OptionsBuilder;

class EmployeeSelectController extends Controller
{
    use OptionsBuilder;

    protected $model = Example::class;
}
