<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class role extends Model
{
    protected $fillable=['role'];
//    public function users() {
//
//        return $this->belongsToMany(User::class,'users_roles');
//
//    }
    public function users()
    {
        return $this->hasMany(User::class);
    }
}

