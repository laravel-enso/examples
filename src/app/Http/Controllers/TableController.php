<?php

namespace LaravelEnso\Examples\app\Http\Controllers;

use App\Http\Controllers\Controller;
use LaravelEnso\VueDatatable\app\Traits\Excel;
use LaravelEnso\VueDatatable\app\Traits\Datatable;
use LaravelEnso\Examples\Tables\Builders\ExampleTable;

class TableController extends Controller
{
    use Datatable, Excel;

    protected $tableClass = ExampleTable::class;
}
