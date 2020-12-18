<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Rules\NationalCode;

class createUserRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
//        'name', 'email', 'password','role','photo','status'
        return [
            'name' => 'string|required|alpha_space|min:2',
            'lastName' => 'string|required|alpha_space|min:2',
            'mobile' => 'required|max:11',
            'phone' => 'required',
            'nationalNumber' => 'required|max:10',
            'email' => 'string|required|unique:users,email|email',
            'address' => 'string|required|min:3',
            'password' => 'min:8',
            'photo' => 'required|file|mimes:jpg,png,jpeg|max:1000',
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'لطفا نام خود را وارد نمایید',
            'name.min' => ' نام باید بیش از 2 حرف داشته باشد',
            'name.string' => 'نام باید از نوع رشته ای باشد',
            'name.alpha_space' => 'نام باید فقط شامل حروف باشد',
            'lastName.required' => 'لطفا نام خود را وارد نمایید',
            'lastName.min' => ' نام باید بیش از 2 حرف داشته باشد',
            'lastName.string' => 'نام باید از نوع رشته ای باشد',
            'lastName.alpha_space' => 'نام باید فقط شامل حروف باشد',
            'mobile.required' => 'پر کردن فیلد موبایل اجباری است',
            'mobile.integer' => 'موبایل باید فقط شامل اعداد باشد',
            'mobile.max' => 'فیلد موبایل حداکثر باید 11 رقم باشد',
            'phone.required' => 'پر کردن فیلد تلفن ثابت اجباری است',
            'phone.integer' => 'تلفن ثابت باید فقط شامل اعداد باشد',
            'nationalNumber.required' => 'پر کردن فیلد کد ملی اجباری است',
            'nationalNumber.max' => 'فیلد کد ملی حداکثر باید 10 رقم باشد',
            'email.required' => 'لطفا ایمیل خود را وارد نمایید',
            'email.unique' => 'آدرس ایمیل شما نامعتبر است',
            'email.email' => 'فرمت آدرس ایمیل شما نامعتبر است',
            'address.string' => 'آدرس ایمیل باید از نوع رشته ای باشد',
            'address.required' => 'پر کردن فیلد آدرس اجباری است',
            'address.min' => 'فیلد آدرس حداقل باید 3 حرف باشد',
            'password.min' => 'فیلد پسورد حداقل باید 8 کاراکتر باشد',
            'photo.mimes' => 'فایل باید از نوع jpg,jpeg,png باشد',
            'photo.max' => 'حجم تصویر نباید بیشتر از 1000 کیلوبایت باشد',
        ];
    }
}
