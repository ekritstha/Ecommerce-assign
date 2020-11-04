<?php

namespace App\Models\Models;

use Illuminate\Database\Eloquent\Model;

class Component extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'description',
        'image'
    ];
}
