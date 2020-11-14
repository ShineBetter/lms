<?php

namespace App;

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
        return $this->hasMany('App\User');
    }
}

