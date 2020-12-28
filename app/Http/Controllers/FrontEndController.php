<?php

namespace App\Http\Controllers;

use App\Http\Requests\createUserRequest;
use App\Models\Banner;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\Hash;
use App\User;
use Illuminate\Support\Facades\Session;
use Trez\RayganSms\Facades\RayganSms;

class FrontEndController extends Controller
{
    public function login()
    {
        return view('webSit.login');
    }

    public function submitLogin(Request $request)
    {
        $data = $request->all();
        if (Auth::attempt(['email' => $data['email'], 'password' => $data['password'], 'status' => 'active'])) {
            if (Auth::user()->mobile_code == 1) {
                Session::put('user', $data['email']);
                request()->session()->flash('success', 'ورود شما موفقیت آمیز

             بود.');
                return redirect()->route('index');
            }else{
                $code = mt_rand(100000, 999999);
                Auth::user()->mobile_code = $code;
                Auth::user()->save();
                RayganSms::sendAuthCode(Auth::user()->profile->mobile,"code : $code", false);
                return view('webSit.twoFactor');
            }
        } else {
            request()->session()->flash('errors', 'نام کاربری و یا رمز عبور اشتباه است دوباره تلاش کنید!');
            return redirect()->back();
        }
    }

    public function register()
    {
        return view('webSit.register');
    }

    public function registerSubmit(createUserRequest $request)
    {
        $code = mt_rand(100000, 999999);
        $user = new User();
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->mobile_code = $code;
        if ($request->parent == 0) {
            $user->user_role = 'student';
        } else {
            $user->user_role = 'parent';
        }
        if ($user->save()) {
            $user->profile()->insert([
                'user_id' => $user->id,
                'name' => $request->name,
                'lastName' => $request->lastName,
                'parent_name' => $request->parentName,
                'nationalNumber' => $request->nationalNumber,
                'phone' => $request->phone,
                'mobile' => $request->mobile,
                'date_of_birth' => Carbon::createFromFormat('Y/m/d', $request->birthday)->timestamp,
                'address' => $request->address,
                'photo' => '0919',
                'created_at' => now(),
            ]);
        }
        RayganSms::sendAuthCode($request->mobile,"code : $code", false);
        Session::put('user', $request->email);
        Session::put('auth_id', $user->id);
        request()->session()->flash('success', 'ثبت نام شما با موفقیت انجام شد');
        return redirect()->route('twofactor.page');
    }

    public function sendTwoFactor()
    {
        $code = mt_rand(100000, 999999);
        $user = User::where('id',\session('auth_id'))->first();
        $user->mobile_code = $code;
        $user->save();
        RayganSms::sendAuthCode($user->profile->mobile,"code : $code", false);
    }

    public function checkTwoFactor(Request $request)
    {
        $user = User::where('id',\session('auth_id'))->first();
        if ($user->mobile_code == $request->code){
            $user->mobile_code = 1;
            $user->save();
            $data = ['ok' => true];
        }else{
            $data = ['ok' => false];
        }
        return $data;
    }

    public function logout()
    {
        auth()->logout();
        request()->session()->flash('success', 'خروج از حساب با موفقیت انجام شد.');
        return redirect(route('index'));
    }

    public function index()
    {
        $banner = Banner::orderby('id', 'desc')->take(3)->skip(0)->get();
        return view('webSit.index', ['banner' => $banner]);
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
