<?php

namespace App\Http\Controllers;

use App\User;
use App\userRoles;
use Illuminate\Http\Request;

class UserRolesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = User::where('id', '!=', \auth()->id())->get();
        return view('backend.admin.userRoles.index', ['data' => $data, 'row' => 0]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\userRoles $userRoles
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = User::findOrFail($id);
        return view('backend.admin.userRoles.edit', ['data' => $data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\userRoles $userRoles
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);
        $role = $user->user_role;
        if ($role == 'admin') {
            $user->user_role = 'admin';
        } elseif ($role == 'teacher') {
            $user->user_role = 'teacher';
        } elseif ($role == 'parent') {
            $user->user_role = 'parent';
        } elseif ($role == 'student') {
            $user->user_role = 'student';
        }
        $user->save();
        $comment = 'ویرایش اطلاعات ، بدرستی ذخیره شد';
        session()->flash('status', $comment);
        return redirect()->route('userRoles.index');
    }
}
