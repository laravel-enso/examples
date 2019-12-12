<?php

namespace LaravelEnso\Examples\app\Http\Controllers;

use Illuminate\Routing\Controller;
use LaravelEnso\Examples\Tables\Builders\ExampleTable;
use LaravelEnso\Tables\app\Traits\Excel;

class TableExcel extends Controller
{
    use Excel;

    protected $tableClass = ExampleTable::class;
}
