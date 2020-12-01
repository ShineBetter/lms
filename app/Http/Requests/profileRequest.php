<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;

class profileRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     turn bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'string',
            'lastName' => 'string',
            'photo' => 'image|size:2000',
            'email' => 'email|unique:users',
            'phone' => 'numeric',
            'nationalNumber' => 'numeric',
            'mobile' => 'numeric',
            'address' => 'string',
            'oldPassword' => 'required',
            'newPassword' => 'required',
            'confirmNewPassword' => 'required|same:newPassword'
        ];
    }

    public function messages()
    {
        return [
            'name.string' => 'نام شما باید شامل حروف فارسی یا انگلیسی باشد',
            'lastName.string' => 'نام خانوادگی شما باید شامل حروف فارسی یا انگلیسی باشد',
            'photo.image' => 'فایل شما باید عکس باشد',
            'photo.size' => 'عکس شما باید کمتر از 2 مگابایت باشد',
            'email.email' => 'ایمیل شما نامعتبر است',
            'email.unique' => 'این ایمیل قبلا ثبت شده است',
            'phone.numeric' => 'شماره تلفن شما باید شامل اعداد باشد',
            'nationalNumber.numeric' => 'کد ملی شما باید شامل اعداد باشد',
            'mobile.numeric' => 'شماره موبایل شما باید شامل اعداد باشد',
            'address.string' => 'آدرس شما باید شامل حروف فارسی یا انگلیسی باشد',
            'oldPassword.required' => 'پسورد قبلی الزامی است',
            'newPassword.required' => 'پسورد جدید الزامی است',
            'confirmNewPassword.required' => 'تاییدیه پسورد جدید الزامی است',
            'confirmNewPassword.same' => 'تاییدیه پسورد جدید باید شبیه پسورد جدید باشد',
        ];
    }
}
