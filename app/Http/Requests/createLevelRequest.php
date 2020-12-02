<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;

class createLevelRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'level_title'=>'required|string|between:3,50'
        ];
    }

    public function messages()
    {
        return[
            'level_title.required'=> 'لطفا عنوان پایه تحصیلی را وارد نمایید',
            'level_title.between'=> 'عنوان باید بین 3 تا 50 کاراکتر داشته باشد',
        ];
    }
}
