<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class quiz extends Model
{
    protected $fillable =['quiz_name','quiz_stat','quiz_exp'];

    public function users()
    {
        return $this->belongsToMany(\App\User::class,'user_quiz');
    }
}
