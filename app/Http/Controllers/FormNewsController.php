<?php

namespace App\Http\Controllers;

//use App\Http\Requests\formNews;
use App\Models\formNews;
use Illuminate\Http\Request;

class FormNewsController extends Controller
{
    public function index()
    {
        $data=formNews::paginate(10);
        return view("backend.admin.formNews.index",['data' => $data]);


    }

    public function store(\App\Http\Requests\formNews $request)
    {
        $form = new formNews();
        $form->email = $request->email;
        $form->time = now();
        $form->save();
        $comment = 'به شما اطلاع میدهیم';
        session()->flash('status', $comment);
        return back();
    }
    public function destroy($id)

    {
        $form = formNews::where('id', $id)->first();
        $form->delete();
        $comment = 'عملیات حذف بدرستی انجام شد';
        session()->flash('status', $comment);
        return back();
    }
}
