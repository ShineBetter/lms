<?php

namespace App\Http\Controllers;

use App\Models\profile;
use App\Models\questions;
use App\Models\quiz;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\Banner;
use Illuminate\Support\Facades\Auth;

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
        return view('backend.admin.index',['data' => $data]);
    }

    public function quiz(Request $request)
    {
        $quiz_id = $request->quiz_id;
        $quiz = quiz::findOrFail($quiz_id);
        $questions_count = questions::where('quiz_id',$quiz_id)->get()->count();
        $questions = questions::where('quiz_id',$quiz_id)->paginate(1);
        $quiz_start = Carbon::parse(Carbon::createFromTimestamp($quiz->quiz_start));
        $quiz_exp= Carbon::parse(Carbon::createFromTimestamp($quiz->quiz_exp));
        $quiz_time = $quiz_start->diffInMinutes($quiz_exp);
        return view('backend.admin.quiz.quiz',['questionss' => $questions,'questions_count' => $questions_count,'quiz' => $quiz,'quiz_time' => $quiz_time,'question_row' => 1]);
    }
}
