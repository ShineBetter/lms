<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class quizResult extends Model
{
    public function users()
    {
        return $this->belongsTo(\App\User::class,'user_id');
    }

    public function quiz()
    {
        return $this->hasOne(quiz::class,'id');
    }

    public function questions($quiz_id,$user_id)
    {
        $question_count = DB::table('user_question')->where(['quiz_id' => $quiz_id, 'user_id' => $user_id])->count();
        return $question_count;
    }

    public function correct_answers($user_id,$quiz_id)
    {
        $correct_answers = DB::table('user_quiz')->where(['user_id' => $user_id,'quiz_id' => $quiz_id])->first()->correct_answers;
        return $correct_answers;
    }

    public function score($user_id,$quiz_id)
    {
        $score = DB::table('user_quiz')->where(['user_id' => $user_id,'quiz_id' => $quiz_id])->first()->score;
        return $score;
    }
}
