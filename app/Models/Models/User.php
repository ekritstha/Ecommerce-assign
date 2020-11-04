<?php

namespace App\Models\Models;

use App\Models\User as ModelsUser;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

// use Spatie\Permission\Traits\HasRoles;

class User extends ModelsUser
{
    // use HasRoles;
    
    protected $fillable = [
        'name',
        'email',
        'password',
        'country',
        'address',
        'zipcode',
        'phone',
        'bio'
    ];
}
