<?php

namespace App\Http\Controllers;

use App\Http\Requests\createQuizRequest;
use App\Models\quiz;
use Illuminate\Http\Request;

class QuizController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=quiz::paginate(10);
        return view('backend.admin.quiz.index',['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.admin.quiz.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(createQuizRequest $request)
    {
        $level = new quiz();
        $level->quiz_name = $request->quiz_name;
        $level->quiz_start = $request->quiz_start;
        $level->quiz_exp = $request->quiz_exp;
        $level->save();
        $comment = 'اطلاعات ، بدرستی ذخیره شد';
        session()->flash('status', $comment);
        return redirect()->route('quiz.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\quiz  $quiz
     * @return \Illuminate\Http\Response
     */
    public function show(quiz $quiz)
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
     * @param  \App\quiz  $quiz
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = quiz::findorfail($id);
        return view('backend.admin.quiz.edit', ['data' => $data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\quiz  $quiz
     * @return \Illuminate\Http\Response
     */
    public function update(createQuizRequest $request, $id)
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
     * Remove the specified resource from storage.
     *
     * @param  \App\quiz  $quiz
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
