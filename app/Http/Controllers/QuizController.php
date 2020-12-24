<?php

namespace App\Http\Controllers;

use App\Http\Requests\createQuizRequest;
use App\Models\quiz;
use App\User;
use Carbon\Carbon;
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
        $data = User::where('user_role','student')->get();
        $teachers = User::where('user_role','teacher')->get();
        return view('backend.admin.quiz.create', ['data' => $data,'teachers' => $teachers]);
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
        $quiz->quiz_start = Carbon::createFromFormat('H:i',$request->quiz_start)->timestamp;
        $quiz->quiz_exp = Carbon::createFromFormat('H:i',$request->quiz_exp)->timestamp;
        $quiz->quiz_exp_date =  Carbon::createFromFormat('Y-m-d',$request->quiz_exp_date)->timestamp;
        $quiz->quiz_start_date = Carbon::createFromFormat('Y-m-d',$request->quiz_start_date)->timestamp;
        $quiz->user_id = auth()->id();
        $quiz->teacher_id = $request->teacher_id;
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
        $quiz->save();
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
        $start_time = Carbon::createFromTimestamp($data->quiz_start)->format('H:i');
        $end_time = Carbon::createFromTimestamp($data->quiz_exp)->format('H:i');
        $start_date = Carbon::createFromTimestamp($data->quiz_start_date)->format('Y-m-d');
        $end_date = Carbon::createFromTimestamp($data->quiz_exp_date)->format('Y-m-d');
        $students = User::where('user_role','student')->get();
        $teachers = User::where('user_role','teacher')->get();
        $studentSelected = DB::table('user_quiz')->where(['quiz_id' => $id])->pluck('user_id');
        return view('backend.admin.quiz.edit', ['data' => $data, 'students' => $students, 'studentSelected' => $studentSelected, 'teachers' => $teachers, 'start_time' => $start_time, 'end_time' => $end_time, 'start_date' => $start_date, 'end_date' => $end_date]);
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
        $quiz->quiz_start = Carbon::createFromFormat('H:i',$request->quiz_start)->timestamp;
        $quiz->quiz_exp = Carbon::createFromFormat('H:i',$request->quiz_exp)->timestamp;
        $quiz->quiz_exp_date =  Carbon::createFromFormat('Y-m-d',$request->quiz_exp_date)->timestamp;
        $quiz->quiz_start_date = Carbon::createFromFormat('Y-m-d',$request->quiz_start_date)->timestamp;
        $quiz->last_editor_user_id = auth()->id();
        $quiz->teacher_id = $request->teacher_id;
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
