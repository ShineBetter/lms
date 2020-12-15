<?php

namespace App\Http\Controllers;

use App\Http\Requests\contactUsEdit;
use App\Models\contact;
use App\Models\social;
use Illuminate\Http\Request;
use App\Models\insertForm;

class ContactController extends Controller
{
    public function index()
    {
        $data=contact::paginate(10);
        return view("backend.admin.Contact.index",['data'=>$data]);
    }
    public function formindex()
    {
        $data=insertForm::paginate(10);
        return view("backend.admin.Contact.formindex",['data'=>$data]);
    }

    public function indexSocial()
    {
        $data=social::paginate(10);
        return view("backend.admin.social.index",['data'=>$data]);
    }
    public function edit($id)
    {
        $data = contact::findorfail($id);
        return view("backend.admin.Contact.edit",['data'=>$data]);
    }
    public function formshow($id)
    {
        $data = insertForm::findorfail($id);
        return view("backend.admin.Contact.formshow",['data'=>$data]);
    }
    public function editSocial($id)
    {
        $data = social::findorfail($id);
        return view("backend.admin.social.edit",['data'=>$data]);
    }

    public function update(contactUsEdit $request ,$id )
    {
        $contact = contact::where('id', $id)->first();
        $contact->phone=$request->phone;
        $contact->address=$request->address;
        $contact->map=$request->map;
        $contact->email=$request->email;
        $contact->text=$request->text;
        $contact->save();
        $comment = 'ویرایش اطلاعات موفقیت آمیز بود';
        session()->flash('status', $comment);
        return redirect()->route('contact.index');
    }
    public function updateSocial(Request $request ,$id )
    {
        $social = social::where('id', $id)->first();
        $social->social_icon=$request->social_icon;
        $social->social_name=$request->social_name;
        $social->social_link=$request->social_link;
        $social->save();
        $comment = 'ویرایش اطلاعات موفقیت آمیز بود';
        session()->flash('status', $comment);
        return redirect()->route('social.index');
    }

    public function create()
    {
        return view('backend.admin.social.create');

    }

    public function store(Request $request)
    {
        $social = new social();
        $social->social_name= $request->social_name;
        $social->social_icon = $request->social_icon;
        $social->social_link = $request->social_link;
        $social->save();
        $comment = 'اطلاعات ، بدرستی ذخیره شد';
        session()->flash('status', $comment);
        return redirect()->route('social.index');
    }

    public function insertForm(Request $request)
    {
        $form=new insertForm();
        $form->name=$request->name;
        $form->phone=$request->phone;
        $form->text=$request->text;
        $form->email=$request->email;
        $form->class=$request->class;
        $form->save();
        return redirect()->route("contact-main");
    }
    public function destroy($id)
    {
        $quiz = social::where('id', $id)->first();
        $quiz->delete();
        $comment = 'عملیات حذف بدرستی انجام شد';
        session()->flash('status', $comment);
        return back();
    }
}
