<?php

namespace App\Http\Controllers;

use App\Models\profile;
use App\Models\questions;
use App\Models\quiz;
use Carbon\Carbon;
use http\Client\Curl\User;
use Illuminate\Http\Request;
use App\Models\Banner;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $data = profile::where('user_id', Auth::id())->first();
        return view('backend.admin.index', ['data' => $data]);
    }

    public function quiz(Request $request)
    {
        $quiz_id = $request->quiz_id;
        $quiz = quiz::findOrFail($quiz_id);
        $questions_count = questions::where('quiz_id', $quiz_id)->get()->count();
        $questions = questions::where('quiz_id', $quiz_id)->first();
        $all_questions = questions::where('quiz_id', $quiz_id)->get();
        $previous_question = questions::where('id', '<', $questions->id)->where('quiz_id', $quiz_id)->first();
        $next_question = questions::where('id', '>', $questions->id)->where('quiz_id', $quiz_id)->first();
        $quiz_start = Carbon::parse(Carbon::createFromTimestamp($quiz->quiz_start));
        $quiz_exp = Carbon::parse(Carbon::createFromTimestamp($quiz->quiz_exp));
        $quiz_status = 'close';
        $now = Carbon::now();
        $quiz_time = $now->diffInMinutes($quiz_exp);
        $carbonQuizStartDate = Carbon::createFromTimestamp($quiz->quiz_start_date);
        $carbonQuizExpDate = Carbon::createFromTimestamp($quiz->quiz_exp_date);
        if (DB::table('user_quiz')->where(['user_id' => \auth()->id(), 'quiz_id' => $quiz_id])->count() < 1) {
            if ($carbonQuizStartDate->year <= $now->year && $carbonQuizStartDate->month <= $now->month && $carbonQuizStartDate->day <= $now->day && $carbonQuizExpDate->year >= $now->year && $carbonQuizExpDate->month >= $now->month && $carbonQuizExpDate->day >= $now->day) {
                if ($quiz->quiz_start <= $now->timestamp && $quiz->quiz_exp >= $now->timestamp) {
                    $quiz_status = 'open';
                } else {
                    $quiz_status = 'close';
                }
            }
        }
        return view('backend.admin.quiz.quiz', ['quiz_status' => $quiz_status, 'questions' => $questions, 'all_questions' => $all_questions, 'previous_question' => $previous_question, 'next_question' => $next_question, 'questions_count' => $questions_count, 'quiz' => $quiz, 'quiz_time' => $quiz_time, 'question_row' => 1]);
    }

    public function getFirstAnswer(Request $request)
    {
        $checkedRadio = DB::table('user_question')->where(['question_id' => $request->question_id,'user_id' => Auth::id()])->first();
        return ['checkedRadio' => $checkedRadio];
    }

    public function getQuestion(Request $request)
    {
        $question_id = $request->question_id;
        $quiz_id = $request->quiz_id;
        $questions = questions::where(['id' => $question_id])->first();
        $next_question = questions::where('id', '>', $questions->id)->orderBy('id', 'asc')->first();
        $previous_question = questions::where('id', '<', $questions->id)->orderBy('id', 'desc')->first();
        $checkedRadio = DB::table('user_question')->where(['question_id' => $question_id,'user_id' => Auth::id()])->first();
        return ['questions' => $questions, 'next_question' => $next_question, 'pre_question' => $previous_question, 'count' => $questions->count(), 'checkedRadio' => $checkedRadio];
    }

    public function sendAnswer(Request $request)
    {
        $exist_question = DB::table('user_question')->where('question_id', '=', $request->question_id)->exists();
        if ($exist_question == null) {
            DB::table('user_question')->insert([
                'quiz_id' => $request->quiz_id,
                'user_id' => \auth()->id(),
                'question_id' => $request->question_id,
                'answer' => $request->answer
            ]);
        } else {
            DB::table('user_question')->where('question_id', '=', $request->question_id)->update([
                'answer' => $request->answer
            ]);
        }
    }

    public function checkAnswers(Request $request)
    {
        $quiz_id = $request->quiz_id;
        $user = Auth::id();
        $user_questions = DB::table('user_question')->where(['quiz_id' => $quiz_id, 'user_id' => $user])->get();
        $i = 0;
        DB::table('quiz_results')->insert([
            'user_id' => $user,
            'quiz_id' => $quiz_id,
            'created_at' => now()->timestamp,
        ]);
        foreach ($user_questions as $item) {
            $question = questions::where(['id' => $item->question_id, 'correct_answer' => $item->answer])->get();
            foreach ($question as $items) {
                $i++;
            }
            $user_score = $i * 100 / $user_questions->count();
            if (DB::table('user_quiz')->where(['quiz_id' => $quiz_id, 'user_id' => $user])->exists() == true) {
                DB::table('user_quiz')->where(['quiz_id' => $quiz_id, 'user_id' => $user])->update([
                    'correct_answers' => $i,
                    'score' => $user_score,
                    'updated_at' => now()->timestamp
                ]);
            } else {
                DB::table('user_quiz')->insert([
                    'user_id' => $user,
                    'quiz_id' => $quiz_id,
                    'score' => $user_score,
                    'correct_answers' => $i,
                    'created_at' => now()->timestamp,
                ]);
                DB::table('quiz_results')->insert([
                    'user_id' => $user,
                    'quiz_id' => $quiz_id,
                    'created_at' => now()->timestamp,
                ]);
            }
        }
        $quiz = quiz::where('id', $quiz_id)->first();
        $teacher = \App\User::where('id', $quiz->teacher_id)->first();
        $user_quiz = DB::table('user_quiz')->where(['quiz_id' => $quiz_id,'user_id' => $user])->first();
        return view('backend.admin.quizResult.quizResult', ['teacher' => $teacher,'quiz' => $quiz,'user_quiz' => $user_quiz,'user_question' => $user_questions]);
    }

    public function examPay(Request $request)
    {
        $quiz_id = $request->quiz_id;
        $quiz = quiz::where('id', $quiz_id)->first();
        $quiz->pay_status = 1;
        $quiz->save();
        return redirect(route('quiz.index'));
    }
}
