<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class lesson extends Model
{
    protected $data=['deleted_at'];
    protected $fillable = ['title','level_id'];
}
