<?php

namespace App\Http\Controllers;

use App\Models\profile;
use App\Models\questions;
use App\Models\quiz;
use Carbon\Carbon;
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
        $previous_question = questions::where('id', '<', $questions->id)->first();
        $next_question = questions::where('id', '>', $questions->id)->first();
        $quiz_start = Carbon::parse(Carbon::createFromTimestamp($quiz->quiz_start));
        $quiz_exp = Carbon::parse(Carbon::createFromTimestamp($quiz->quiz_exp));
        $quiz_time = $quiz_start->diffInMinutes($quiz_exp);
        return view('backend.admin.quiz.quiz', ['questions' => $questions, 'all_questions' => $all_questions, 'previous_question' => $previous_question, 'next_question' => $next_question, 'questions_count' => $questions_count, 'quiz' => $quiz, 'quiz_time' => $quiz_time, 'question_row' => 1]);
    }

    public function getFirstAnswer(Request $request)
    {
        $checkedRadio = DB::table('user_question')->where('question_id','=',$request->question_id)->first();
        return ['checkedRadio' => $checkedRadio];
    }

    public function getQuestion(Request $request)
    {
        $question_id = $request->question_id;
        $questions = questions::where('id', $question_id)->first();
        $next_question = questions::where('id', '>', $questions->id)->orderBy('id', 'asc')->first();
        $previous_question = questions::where('id', '<', $questions->id)->orderBy('id', 'desc')->first();
        $checkedRadio = DB::table('user_question')->where('question_id','=',$question_id)->first();
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
            DB::table('user_question')->where('question_id','=',$request->question_id)->update([
                'answer' => $request->answer
            ]);
        }
    }

    public function checkAnswers(Request $request)
    {
        return view('backend.admin.quizResult.quizResult');
    }
}
