<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class creatBannerRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }


    public function rules()
    {
        return [
            'title'=>'required|string|between:3,30',
            'caption'=>'required|string|between:10,100',
//            'alt' => 'string|nullable|max:50',
            'status' => 'required',
            'image'=>'required|file|mimes:jpg,png,jpeg|min:100|max:500',
        ];
    }

    public function messages()
    {
        return[
            'title.required'=>'لطفا عنوان تصویر را وارد نمایید.',
            'title.between'=>'عنوان باید بین 3 تا 30 کلمه داشته باشد. ',
            'caption.required'=>'لطفا متن تصویر را وارد نمایید.',
            'caption.between'=>' لطفا متن تصویر 10 تا 100 کلمه باشد.',
            'status.required'=>'مشخص کردن وضعیت تصویر الزامی می باشد.',
            'image.required'=>'وارد کردن تصویر الزامی می باشد.',
            'image.mimes'=>'فایل باید از نوع jpg,jpeg,png باشد. ',
            'image.min'=>'حجم تصویر نباید کمتر از 100 کیلوبایت باشد.',
            'image.max'=>'حجم تصویر نباید بیشتر  از 500 کیلوبایت باشد.' ,
        ];
    }
}
