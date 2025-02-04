<?php

namespace App\Models;

use Illuminate\Mail\Mailables\Content;
use Illuminate\Database\Eloquent\Model;

class Text extends Model
{
    protected $guarded = [];

    public function content()
    {
        return $this->morphOne(Content::class, 'contentable');
    }
}
