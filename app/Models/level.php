<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class level extends Model
{
    protected $data=['deleted_at'];
    protected $fillable=['title'];

    public function users()
    {
        return $this->morphedByMany(User::class,'levelable','levelable');
    }
}
