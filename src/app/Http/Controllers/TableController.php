<?php

namespace LaravelEnso\Examples\app\Http\Controllers;

use Illuminate\Routing\Controller;
use LaravelEnso\Tables\app\Traits\Datatable;
use LaravelEnso\Tables\app\Traits\ExcelExport;
use LaravelEnso\Examples\Tables\Builders\ExampleTable;

class TableController extends Controller
{
    use Datatable, ExcelExport;

    protected $tableClass = ExampleTable::class;
}
