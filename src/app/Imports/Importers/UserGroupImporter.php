<?php

namespace LaravelEnso\Examples\app\Imports\Importers;

use LaravelEnso\Helpers\app\Classes\Obj;
use LaravelEnso\Core\app\Models\UserGroup;
use LaravelEnso\DataImport\app\Contracts\AfterHook;
use LaravelEnso\DataImport\app\Contracts\BeforeHook;
use LaravelEnso\DataImport\app\Contracts\Importable;

class UserGroupImporter implements Importable, BeforeHook, AfterHook
{
    public function before(Obj $params)
    {
        \Log::info($params->all());
    }

    public function run(Obj $row)
    {
        UserGroup::create($row->toArray());
    }

    public function after(Obj $params)
    {
        \Log::info($params->toArray());
    }
}
