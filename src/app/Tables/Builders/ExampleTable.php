<?php

namespace LaravelEnso\Examples\Tables\Builders;

use LaravelEnso\Tables\app\Services\Table;
use LaravelEnso\Examples\app\Models\Example;

class ExampleTable extends Table
{
    protected $templatePath = __DIR__.'/../Templates/exampleTable.json';

    public function query()
    {
        return Example::selectRaw('
            id as "dtRowId", name, position, seniority, project,
            salary, taxes, is_active, hired_at
        ');
    }
}
