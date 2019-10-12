<?php

namespace LaravelEnso\Examples\app\Http\Controllers;

use Illuminate\Routing\Controller;
use LaravelEnso\Tables\app\Traits\Excel;
use LaravelEnso\Examples\Tables\Builders\ExampleTable;

class TableExcel extends Controller
{
    use Excel;

    protected $tableClass = ExampleTable::class;
}
