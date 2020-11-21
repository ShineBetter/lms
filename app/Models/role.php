<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class role extends Model
{
    protected $fillable =['title','permissions'];

    public function user()
    {
        $this->hasMany(User::class);
    }

}
