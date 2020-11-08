<?php

namespace App\Models;
use App\Models\lesson;
use Illuminate\Database\Eloquent\Model;

class level extends Model
{
    protected $data=['deleted_at'];
    protected $fillable=['title'];

    public function lessons()
    {
        return $this->hasMany(lesson::class);
    }
}
