<?php

namespace App\Http\Controllers;

use App\Models\profile;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function getInformation()
    {
        $data = profile::where('user_id',Auth::id())->first();
        $user = User::find(Auth::id())->first();
        return view('backend.admin.profile.profile-setting',['data'=>$data,'user' => $user]);
   }

    public function saveInformation(Request $request)
    {
        $data = profile::where('user_id',Auth::id())->first();
        $user = User::find(Auth::id())->first();

        $file = $request->file('photo');
        $file_name = 'profile-photo-'.time().'.'.$file->getClientOriginalExtension();
//        dd($file_name);
        $data->name = $request->name;
        $data->lastName = $request->lastName;
        $user->email = $request->email;
        $data->phone = $request->phone;
        $data->mobile = $request->mobile;
        $data->address = $request->address;
        $data->save();
        $user->save();
        return back();
    }
}
