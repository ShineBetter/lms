<?php

namespace App\Http\Controllers;

use App\Http\Requests\createQuizRequest;
use App\Models\quiz;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class QuizController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = quiz::paginate(10);
        return view('backend.admin.quiz.index', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = User::get();
        return view('backend.admin.quiz.create', ['data' => $data]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(createQuizRequest $request)
    {
        $quiz = new quiz();
        $quiz->quiz_name = $request->quiz_name;
        $quiz->quiz_start = $request->quiz_start;
        $quiz->quiz_exp = $request->quiz_exp;
        $quiz->quiz_start_date = $request->quiz_start_date;
        $quiz->quiz_exp_date = $request->quiz_exp_date;
        if ($request->students == 1) {
            $quiz->quiz_permission = 'all';
        } elseif ($request->students == 2) {
            $quiz->quiz_permission = 'some';
        }
        $quiz->save();
        if ($request->students == 1) {
            $quiz->quiz_permission = 'all';
        } elseif ($request->students == 2) {
            $quiz->quiz_permission = 'some';
            $students = $request->some_student;
            foreach ($students as $item) {
                DB::table('user_quiz')->insert([
                    'user_id' => $item,
                    'quiz_id' => $quiz->id
                ]);
            }
        }
        $comment = 'اطلاعات ، بدرستی ذخیره شد';
        session()->flash('status', $comment);
        return redirect()->route('quiz.index');
    }

    /**
     * Display the specified resource.
     *
     * @param \App\quiz $quiz
     * @return \Illuminate\Http\Response
     */
    public function show(createQuizRequest $quiz)
    {
        $quiz = quiz::where('id', $id)->first();
        $quiz->quiz_name = $request->quiz_name;
        $quiz->quiz_start = $request->quiz_start;
        $quiz->quiz_exp = $request->quiz_exp;
        $quiz->save();
        $comment = 'ویرایش اطلاعات موفقیت آمیز بود';
        session()->flash('status', $comment);
        return redirect()->route('quiz.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\quiz $quiz
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = quiz::findorfail($id);
        $students = User::get();
        return view('backend.admin.quiz.edit', ['data' => $data, 'students' => $students]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\quiz $quiz
     * @return \Illuminate\Http\Response
     */
    public function update(createQuizRequest $request, $id)
    {
        $quiz = quiz::where('id', $id)->first();
        $quiz->quiz_name = $request->quiz_name;
        $quiz->quiz_start = $request->quiz_start;
        $quiz->quiz_exp = $request->quiz_exp;
        $quiz->quiz_start_date = $request->quiz_start_date;
        $quiz->quiz_exp_date = $request->quiz_exp_date;
        if ($request->students == 1) {
            $quiz->quiz_permission = 'all';
        } elseif ($request->students == 2) {
            $quiz->quiz_permission = 'some';
        }
        $quiz->save();
        if ($request->students == 1) {
            $quiz->quiz_permission = 'all';
        } elseif ($request->students == 2) {
            $quiz->quiz_permission = 'some';
            $students = $request->some_student;
            foreach ($students as $item) {
                DB::table('user_quiz')->where('quiz_id', '=', $id)->update([
                    'user_id' => $item,
                    'quiz_id' => $quiz->id
                ]);
            }
        }
        $comment = 'ویرایش اطلاعات موفقیت آمیز بود';
        session()->flash('status', $comment);
        return redirect()->route('quiz.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\quiz $quiz
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $quiz = quiz::where('id', $id)->first();
        $quiz->delete();
        $comment = 'عملیات حذف بدرستی انجام شد';
        session()->flash('status', $comment);
        return back();
    }
}
