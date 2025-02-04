<?php

namespace App\Models;

use App\Models\Category;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Task extends Model
{
    /** @use HasFactory<\Database\Factories\TaskFactory> */
    use HasFactory;

    protected $guarded = [];

    public function user()
    {
        return $this->hasOne(User::class);
    }
    
    public function categories()
    {
        return $this->hasMany(Category::class);
    }

    public function contents()
    {
        return $this->hasMany(Content::class)->orderBy('order');
    }
}
