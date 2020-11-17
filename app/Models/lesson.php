<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class lesson extends Model
{
    protected $data=['deleted_at'];
    protected $fillable = ['title','lessonable_id','lessonable_type'];


//    public function users()
//    {
//        return $this->morphedByMany(User::class,'lessonsables');
//    }
}
