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
        $questions = questions::where('quiz_id',$quiz_id)->first();
        $quiz_start = Carbon::parse(Carbon::createFromTimestamp($quiz->quiz_start));
        dd($quiz_start->minute);
        return view('backend.admin.quiz.quiz',['questions' => $questions,'quiz' => $quiz,'question_row' => 1]);
    }
}
