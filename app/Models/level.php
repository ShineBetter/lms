<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class level extends Model
{
    protected $data=['deleted_at'];
    protected $fillable=['title'];

    public function lesson()
    {
        return $this->hasMany(lesson::class);
    }
}
