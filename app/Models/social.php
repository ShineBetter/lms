<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class social extends Model
{
    protected $table="socials";
    protected $fillable=['social_link','social_icon','social_name'];
}
