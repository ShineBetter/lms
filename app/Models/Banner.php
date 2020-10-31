<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Banner extends Model
{
    protected $data=['deleted_at'];
    protected $fillable=['title','image','alt','caption'];
}
