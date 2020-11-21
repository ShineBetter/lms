<?php

namespace App\Http\Controllers;

use App\Models\role;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(role $rols,User $userr)
    {
        $role = role::paginate(4);
        $user = User::where('id','!=',\auth()->id())->get();
        return view('backend.admin.role.index', ['user'=>$user,'role' => $role, 'row' => 0]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.admin.role.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $role = new role();
        $role->title = $request->title;
        $role->save();
        $comment = 'اطلاعات ، بدرستی ذخیره شد. ';
        session()->flash('role', $comment);
        return redirect()->route('role.index');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $role = role::findorfail($id);
        return $role;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $role = User::findorfail($id);
        $roles = [
          'admin' => 'admin',
          'teacher' => 'teacher',
          'student' => 'student',
          'parent' => 'parent',
        ];
        return view('backend.admin.role.edit', ['role'=>$role,'roles'=>$roles]);
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
        $role = User::where('id',$id)->first();
        $role->user_role = $request->user_role;
        $role->save();
        $comment = 'ویرایش اطلاعات ، بدرستی ذخیره شد. ';
        session()->flash('role', $comment);
        return redirect()->route('role.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

    }
}
