<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class createConferenceRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'title'=>'required|string|between:3,100',
            'description'=>'required|string|between:10,1000',
            'status' => 'required',
            'date' => 'required',
            'time' => 'required',
            'periodOfTime'=>'required',
            'speacher' => 'required|string',
            'image'=>'required|file|mimes:jpg,png,jpeg|min:100|max:200',

        ];
    }

    public function messages()
    {
        return[
            'title.required'=>'لطفا عنوان تصویر را وارد نمایید.',
            'title.between'=>'عنوان باید بین 3 تا 100 کلمه داشته باشد. ',
            'description.required'=>'لطفا توضیحات کنفرانس را وارد نمایید.',
            'status.required'=>'مشخص کردن وضعیت تصویر الزامی می باشد.',
            'date.required'=>'مشخص کردن تاریخ الزامی می باشد.',
            'time.required'=>'مشخص کردن زمان الزامی می باشد.',
            'speacher.required'=>'مشخص کردن نام سخنران الزامی می باشد.',
            'periodOfTime.required'=>'وارد کردن مدت زمان همایش الزامیست.',
            'image.required'=>'وارد کردن تصویر الزامی می باشد.',
            'image.mimes'=>'فایل باید از نوع jpg,jpeg,png باشد. ',
            'image.min'=>'حجم تصویر نباید کمتر از 100 کیلوبایت باشد.',
            'image.max'=>'حجم تصویر نباید بیشتر  از 200 کیلوبایت باشد.' ,
        ];
    }
}
