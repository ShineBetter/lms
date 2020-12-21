<?php

namespace App\Http\Controllers;

use App\Models\quiz;
use App\Models\quizResult;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Gate;

class QuizResultController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        if (Gate::allows('Admin')) {
            $data = quizResult::paginate(10);
        }
        if (Gate::allows('Teacher')) {
            $data = quizResult::where(['quiz_id' => quiz::where('teacher_id', \Auth::id())->first()->id])->paginate(10);
        }
        if (Gate::allows('Student')) {
            $data = quizResult::where('user_id', \Auth::id())->pagiante(10);
        }
        $users = User::all();
        return view('backend.admin.quizResult.index', ['data' => $data, 'users' => $users]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param \App\quizResult $quizResult
     * @return \Illuminate\Http\Response
     */
    public function show(quizResult $quizResult)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\quizResult $quizResult
     * @return \Illuminate\Http\Response
     */
    public function edit(quizResult $quizResult)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\quizResult $quizResult
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, quizResult $quizResult)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\quizResult $quizResult
     * @return \Illuminate\Http\Response
     */
    public function destroy(quizResult $quizResult)
    {
        //
    }
}
