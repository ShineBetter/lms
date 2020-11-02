<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class createLevelRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'title'=>'required|string|between:3,50'
        ];
    }

    public function messages()
    {
        return[
            'title.required'=>'لطفا عنوان پایه تحصیلی را وارد نمایید.',
            'title.between'=>'عنوان باید بین 3 تا 50 کلمه داشته باشد. ',
        ];
    }
}
