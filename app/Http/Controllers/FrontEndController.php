<?php

namespace App\Http\Controllers;

use App\Http\Requests\ctreatUserRequest;
use App\Models\Banner;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\Hash;
use App\User;
use Illuminate\Support\Facades\Session;
class FrontEndController extends Controller
{
    public function login()
    {
        return view('webSit.login');
    }

    public function submitLogin(Request $request)
    {
        $data= $request->all();
        if(Auth::attempt(['email' => $data['email'], 'password' => $data['password'],'status'=>'active'])){
            Session::put('user',$data['email']);
            request()->session()->flash('success','ورود شما موفقیت آمیز بود.');
            return redirect()->route('index');
        }
        else{
            request()->session()->flash('errors','نام کاربری و یا رمز عبور اشتباه است دوباره تلاش کنید!');
            return redirect()->back();
        }
    }

    public function register()
    {
        return view('webSit.register');
    }

    public function registerSubmit(ctreatUserRequest $request)
    {
        $user = new User();
        $user->name = $request->name;
        $user->lastName = $request->lastName;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();
        $user->role()->attach(2,['user_id' =>  $user->id]);
        Session::put('user',$request->email);
        request()->session()->flash('success','ثبت نام شما با موفقیت انجام شد');
        return redirect()->route('panel');
    }
    public function logout(){
        auth()->logout();
        request()->session()->flash('success','خروج از حساب با موفقیت انجام شد.');
        return redirect(route('panel'));
    }

    public function index()
    {
        $banner=Banner::orderby('id','desc')->take(3)->skip(0)->get();;
        return view('webSit.index',['banner'=>$banner]);
    }


    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
