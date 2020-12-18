<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class insertForm extends Model
{
    protected $fillable = ["email", "phone", "class", "text", "name"];
}
