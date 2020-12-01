<?php

namespace App\Http\Controllers;

use App\Models\level;
use App\Models\parents;
use App\Models\profile;
use App\User;
use Illuminate\Http\Request;

class ParentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function fetch(Request $request)
    {
        if ($request->ajax()) {
            $data = User::where('user_role', 'parent')->paginate(10);

            return view('backend.admin.level.index', ['table' => $table, 'type' => 'index'])->render();
        }
    }

    public function index()
    {
        $data = User::where('user_role', 'parent')->paginate(10);

        return view('backend.admin.parents.index', ['table' => $table, 'type' => 'index', 'row' => 0]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = User::where('user_role', 'student')->pluck('email', 'id');
        return view('backend.admin.parents.index', ['form' => $form, 'type' => 'add']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $child_id = $request->pid;
        $parent_child = User::where('id', $child_id)->first();
        $parents = new User();
        $profile = new profile();
        $parents->user_role = 'parent';
        $parents->email = $request->email;
        $parents->pid = 0;
        $parents->save();
        $parent_child->pid = $parents->id;
        $parent_child->save();
        $profile->name = $request->name;
        $profile->lastName = $request->lastName;
        $profile->nationalNumber = $request->nationalNumber;
        $profile->phone = $request->phone;
        $profile->mobile = $request->mobile;
        $profile->date_of_birth = $request->date_of_birth;
        $profile->address = $request->address;
        $profile->photo = $request->photo;
        $parents->profile()->save($profile);
        $comment = 'اطلاعات ، بدرستی ذخیره شد. ';
        session()->flash('parents', $comment);
        return redirect()->route('parent.index');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $parents = User::findorfail($id);
        return $parents;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $parents = User::findorfail($id);
        $child = User::where('user_role', 'student')->pluck('email', 'id');
        $childFind = User::findorfail($parents->id);
        $data = profile::where('user_id', '=', $id)->firstorfail();
        return view('backend.admin.parents.index', ['form' => $form,'type' => 'edit']);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $parents = User::where('id', $id)->first();
        $profile = profile::where('user_id', $id)->first();
        $parents->user_role = 'parent';
        $parents->email = $request->email;
        $parents->save();
        $profile->name = $request->name;
        $profile->lastName = $request->lastName;
        $profile->nationalNumber = $request->nationalNumber;
        $profile->phone = $request->phone;
        $profile->mobile = $request->mobile;
        $profile->date_of_birth = $request->date_of_birth;
        $profile->address = $request->address;
        $profile->photo = $request->photo;
        $parents->profile()->save($profile);
        $comment = 'ویرایش اطلاعات ، بدرستی ذخیره شد. ';
        session()->flash('parents', $comment);
        return redirect()->route('parent.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $parents = User::where('id', $id)->first();
        $parents->delete();
        $comment = 'عملیات حذف بدرستی انجام شد.';
        session()->flash('parents', $comment);
        return back();
    }
}
