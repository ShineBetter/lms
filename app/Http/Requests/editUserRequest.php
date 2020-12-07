<?php

namespace App\Http\Requests;

use App\User;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class editUserRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }
    public function rules()
    {
        return [
            'name' => 'nullable|string|alpha|min:2',
            'lastName' => 'nullable|string|alpha|min:2',
            'mobile' => 'nullable|max:11',
            'nationalNumber' => 'nullable|max:10',
            'address' => 'nullable|string|min:3',
            'date_of_birth' => 'nullable|date',
            'password' => 'nullable|min:6',
            'photo' => 'nullable|file|mimes:jpg,png,jpeg|max:1000',
        ];
    }
    public function messages()
    {
        return [
            'name.min' => ' نام باید بیش از 2 حرف داشته باشد',
            'name.string' => 'نام باید از نوع رشته ای باشد',
            'name.alpha' => 'نام باید فقط شامل حروف باشد',
            'lastName.min' => ' نام باید بیش از 2 حرف داشته باشد',
            'lastName.string' => 'نام باید از نوع رشته ای باشد',
            'lastName.alpha' => 'نام باید فقط شامل حروف باشد',
            'mobile.integer' => 'موبایل باید فقط شامل اعداد باشد',
            'mobile.max' => 'فیلد موبایل حداکثر باید 11 رقم باشد',
            'phone.integer' => 'تلفن ثابت باید فقط شامل اعداد باشد',
            'nationalNumber.max' => 'فیلد کد ملی حداکثر باید 10 رقم باشد',
            'email.email' => 'فرمت آدرس ایمیل شما نامعتبر است',
            'address.string' => 'آدرس ایمیل باید از نوع رشته ای باشد',
            'address.min' => 'فیلد آدرس حداقل باید 3 حرف باشد',
            'password.min' => 'فیلد پسورد حداقل باید 8 کاراکتر باشد',
            'photo.mimes' => 'فایل باید از نوع jpg,jpeg,png باشد',
            'photo.max' => 'حجم تصویر نباید بیشتر از 1000 کیلوبایت باشد',
        ];
    }
}
