<?php

namespace App\Http\Controllers;

use App\Http\Requests\createQuestionRequest;
use App\Http\Requests\editQuestionRequest;
use App\Http\Requests\editUserRequest;
use App\Models\questions;
use App\Models\quiz;
use App\User;
use Illuminate\Http\Request;

class QuestionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = questions::paginate(10);
        return view('backend.admin.questions.index',['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = quiz::pluck('quiz_name','id');
        return view('backend.admin.questions.create', ['data' => $data]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(createQuestionRequest $request)
    {
        $question = new questions();
        $question->question_title = $request->question_title;
        $question->quiz_id = $request->quiz_id;
        $question->user_id = auth()->id();
        $question->answer_one = $request->answer_one;
        $question->answer_two = $request->answer_two;
        $question->answer_three = $request->answer_three;
        $question->answer_four = $request->answer_four;
        $question->correct_answer = $request->correct_answer;
        $question->save();
        $comment = 'ویرایش اطلاعات موفقیت آمیز بود';
        session()->flash('status', $comment);
        return redirect()->route('questions.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\questions  $questions
     * @return \Illuminate\Http\Response
     */
    public function show(questions $questions)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\questions  $questions
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = questions::findorfail($id);
        $quiz = quiz::pluck('quiz_name','id');
        return view('backend.admin.questions.edit', ['data' => $data, 'quiz' => $quiz]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\questions  $questions
     * @return \Illuminate\Http\Response
     */
    public function update(editQuestionRequest $request,  $id)
    {
       $question = questions::findorfail($id);
        $question->question_title = $request->question_title;
        $question->quiz_id = $request->quiz_id;
        $question->last_editor_user_id = auth()->id();
        $question->answer_one = $request->answer_one;
        $question->answer_two = $request->answer_two;
        $question->answer_three = $request->answer_three;
        $question->answer_four = $request->answer_four;
        $question->correct_answer = $request->correct_answer;
        $question->save();
        $comment = 'ویرایش اطلاعات موفقیت آمیز بود';
        session()->flash('status', $comment);
        return redirect()->route('questions.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\questions  $questions
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $quiz = questions::where('id', $id)->first();
        $quiz->delete();
        $comment = 'عملیات حذف بدرستی انجام شد';
        session()->flash('status', $comment);
        return back();
    }
}
