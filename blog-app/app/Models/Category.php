<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    /** @use HasFactory<\Database\Factories\CategoryFactory> */
    use HasFactory;
    protected $guarded = [];

    public function user()
    {
        return $this->hasOne(User::class);
    }

    public function tasks()
    {
        return $this->hasMany(Task::class);
    }
}
