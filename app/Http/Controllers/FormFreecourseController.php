<?php

namespace App\Http\Controllers;


use App\Http\Requests\formFreeRequest;
use App\Models\formFreecourse;
use Illuminate\Http\Request;

class FormFreecourseController extends Controller
{
    public function index()
    {
    $data=formFreecourse::paginate(10);
        return view("backend.admin.formFree.index",['data' => $data]);


    }

    public function store(formFreeRequest $request)
    {
        $form = new formFreecourse();
        $form->name = $request->name;
        $form->email = $request->email;
        $form->phone = $request->phone;
        $form->level = $request->level;
        $form->save();
        $comment = 'به شما اطلاع میدهیم';
        session()->flash('status', $comment);
        return redirect()->route('index');
    }
    public function destroy($id)

        {
            $form = formFreecourse::where('id', $id)->first();
            $form->delete();
            $comment = 'عملیات حذف بدرستی انجام شد';
            session()->flash('status', $comment);
            return back();
        }
}



