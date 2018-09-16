<?php

namespace LaravelEnso\Examples\app\Models;

use Illuminate\Database\Eloquent\Model;

class Example extends Model
{
    protected $casts = ['is_active' => 'boolean'];
}
