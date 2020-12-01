<?php

namespace App\Http\Controllers;

use App\Http\Requests\profileRequest;
use App\Models\profile;
use App\User;
use Illuminate\Support\Facades\Gate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Intervention\Image\Facades;

class ProfileController extends Controller
{

    public function getInformation()
    {
        $child = '';
        if(Gate::allows('Teacher') || Gate::allows('Admin')){
            $userModel = new User();
            $child = $userModel->getParentByAuthId()->profile;
        }
        $data = profile::where('user_id', Auth::id())->first();
        $user = User::find(Auth::id())->first();
        return view('backend.admin.profile.profile-setting', ['data' => $data, 'user' => $user,'child' => $child]);
    }

    public function saveInformation(profileRequest $request)
    {
        $data = profile::where('user_id', Auth::id())->first();
        $user = User::find(Auth::id())->first();
        $file = $request->file('photo');
        if (!empty($file)) {
            $file_name = 'images/profile-image/profile-photo-' . time() . '.' . $file[0]->getClientOriginalName();
            Facades\Image::make($file[0]->getRealPath())->resize(100, 100)->save($file_name);
            $data->photo = $file_name;
        }
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

    function deleteProfileImage(Request $request)
    {
        $data = profile::where('user_id', Auth::id())->first();
        $data->photo = null;
        $data->save();
        return back();
    }

    public
    function changePassword(profileRequest $request)
    {

        $data = profile::where('user_id', Auth::id())->first();
        $user = User::find(Auth::id())->first();
        $oldPassword = $request->oldPassword;
        $newPassword = $request->newPassword;
        $confirmNewPassword = $request->confirmNewPassword;
        if (Hash::check($oldPassword, $user->password)) {
            if ($newPassword == $confirmNewPassword) {
                $user->password = Hash::make($newPassword);
                $data->save();
                session()->flash('status', [
                    'type' => 'success',
                    'text' => 'تغییر پسورد با موفقیت انجام شد'
                ]);
            } else {
                session()->flash('status', [
                    'type' => 'warning',
                    'text' => 'پسورد جدید شما با تایید پسورد شما مطابقت ندارد'
                ]);
            }
        } else {
            session()->flash('status', [
                'type' => 'danger',
                'text' => 'پسورد قبلی شما اشتباه است'
            ]);
        }
        return view('backend.admin.profile.profile-setting', ['data' => $data, 'user' => $user]);
    }
}
