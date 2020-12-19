<?php

namespace App\Http\Controllers;

use App\Http\Requests\formfaqRequest;
use App\Models\formFaq;
use Illuminate\Http\Request;

class FormFaqController extends Controller
{
    public function index()
    {
        $data=formFaq::paginate(10);
        return view("backend.admin.formFaq.index",['data' => $data]);


    }

    public function show($id)
    {
        $data = formFaq::findorfail($id);
        return view('backend.admin.formFaq.show', ['data' => $data]);
    }

    public function store(formfaqRequest $request)
    {
        $form = new formFaq();
        $form->name = $request->name;
        $form->subject = $request->subject;
        $form->phone = $request->phone;
        $form->text = $request->text;
        $form->time = now();
        $form->save();
        $comment = 'با شما تماس میگیریم';
        session()->flash('status', $comment);
        return back();
    }
    public function update($id)
    {
        $data=formFaq::paginate(10);
        return view("backend.admin.formFaq.index",['data' => $data]);
    }
    public function destroy($id)

    {
        $form = formFaq::where('id', $id)->first();
        $form->delete();
        $comment = 'عملیات حذف بدرستی انجام شد';
        session()->flash('status', $comment);
        return back();
    }
}
