<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class conference extends Model
{
    protected $data=['deleted_at'];
    protected $fillable=['title','image','periodOfTime','description','date','time','speacher','status'];
}
