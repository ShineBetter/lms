<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class conference extends Model
{
    protected $fillable=['picture','price','count','description','name','date','offer'];
    protected $data=['deleted_at'];
}
