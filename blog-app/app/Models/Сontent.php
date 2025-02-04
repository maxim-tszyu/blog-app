<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Сontent extends Model
{
    protected $guarded = [];

    public function contentable()
    {
        return $this->morphTo();
    }
}
