<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    use HasFactory;

    public function categories()
    {
        return $this->belongsToMany(Category::class)->orderBy('name');
    }

    public function names()
    {
        return $this->belongsToMany(Name::class)->orderBy('name');
    }
}
