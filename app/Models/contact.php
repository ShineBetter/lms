<?php

namespace App\Models
;

use Illuminate\Database\Eloquent\Model;

class contact extends Model
{
    protected $fillable=['phone','address','map','email','text'];
}
