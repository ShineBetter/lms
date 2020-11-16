<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ctreatUserRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
//        'name', 'email', 'password','role','photo','status'
        return [
            'name' => 'string|required|min:2',
            'email' => 'string|required|unique:users,email|regex:/(.+)@(.+)\.(.+)/i',
            'password' => 'required|min:6|required_with:password_confirmation|same:password_confirmation',
            'password_confirmation' => 'min:6',
//            'image' => 'required|file|mimes:jpg,png,jpeg|min:10|max:50',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'لطفا نام خود را وارد نمایید.',
            'name.min' => ' نام باید بیش از 2 حرف داشته باشد.',
            'email.required' => 'لطفا ایمیل خود را وارد نمایید.',
            'email.unique' => 'آدرس ایمیل شما نامعتبر است',
            'email.regex' => 'فرمت آدرس ایمیل شما نامعتبر است',
            'password.required' => 'رمز عبور خود را وراد کنید',
            'password.min' => 'رمز عبور بیش 6 حرف می باشد.',
            'password.required_with' => ' تکرار رمز عبور الزامی است',
            'password.same' => ' تکرار رمز عبور اشتباه است',
            'password_confirmation.min' => ' تکرار رمز عبور اشتباه است',
//            'image.mimes' => 'فایل باید از نوع jpg,jpeg,png باشد. ',
//            'image.min' => 'حجم تصویر نباید کمتر از 10 کیلوبایت باشد.',
//            'image.max' => 'حجم تصویر نباید بیشتر  از 50 کیلوبایت باشد.',
        ];
    }
}
