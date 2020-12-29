<?php

namespace App\Http\Controllers;

use App\Models\comment;

use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=comment::paginate(10);
        return view("backend.admin.comment.index",['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = User::all();
        return view("backend.admin.comment.create",['data' => $data]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $comment=new comment();
        $comment->name=$request->name;
        $comment->text=$request->text;
        $comment->picture=$request->picture;
        $comment->role=$request->role;
        $comment->save();
        $comment = 'اطلاعات ، بدرستی ذخیره شد';
        session()->flash('status', $comment);
        return redirect()->route('comment.index');
    }

    public function storestudent(Request $request)
    {
        $comment=new comment();
        $comment->name="reza";
        $comment->text=$request->message;
        $comment->quiz_id=$request->quiz_id;
        $comment->date=Carbon::now()->timestamp;
        $comment->role="student";
        $comment->save();
        $comment = 'اطلاعات ، بدرستی ذخیره شد';
        session()->flash('status', $comment);
        return redirect()->route('grid');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function show(comment $comment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = comment::findorfail($id);
        return view('backend.admin.comment.edit', ['data' => $data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $comment = comment::where('id', $id)->first();
        $comment->name = $request->name;
        $comment->text = $request->text;
        $comment->picture = $request->picture;
        $comment->role = $request->role;
        $comment->save();
        $comment = 'ویرایش اطلاعات موفقیت آمیز بود';
        session()->flash('status', $comment);
        return redirect()->route('comment.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $quiz = comment::where('id', $id)->first();
        $quiz->delete();
        $comment = 'عملیات حذف بدرستی انجام شد';
        session()->flash('status', $comment);
        return back();
    }
}
