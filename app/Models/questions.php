<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class questions extends Model
{
    public function quiz()
    {
        return $this->belongsTo(quiz::class);
    }

    public function questionCreator()
    {
        return $this->belongsTo(\App\User::class,'user_id');
    }
    public function questionEditor()
    {
        return $this->belongsTo(\App\User::class,'last_editor_user_id');
    }
}
