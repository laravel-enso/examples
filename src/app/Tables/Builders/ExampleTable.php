<?php

namespace LaravelEnso\Examples\Tables\Builders;

use Illuminate\Database\Eloquent\Builder;
use LaravelEnso\Tables\app\Contracts\Table;
use LaravelEnso\Examples\app\Models\Example;

class ExampleTable implements Table
{
    protected const TemplatePath = __DIR__.'/../Templates/exampleTable.json';

    public function query(): Builder
    {
        return Example::selectRaw('
            id, name, position, seniority, project, salary, taxes, is_active, hired_at
        ');
    }

    public function templatePath(): string
    {
        return static::TemplatePath;
    }
}
