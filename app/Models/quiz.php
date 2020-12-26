<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class quiz extends Model
{
    protected $fillable =['quiz_name','quiz_stat','quiz_exp'];

    public function users()
    {
        return $this->belongsToMany(\App\User::class,'user_quiz');
    }
    public function quizCreator()
    {
        return $this->belongsTo(\App\User::class,'user_id');
    }
    public function quizEditor()
    {
        return $this->belongsTo(\App\User::class,'last_editor_user_id');
    }
    public function questions()
    {
        return $this->belongsTo(questions::class);
    }
}
