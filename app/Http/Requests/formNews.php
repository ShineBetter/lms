<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class formNews extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
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
            'email' => 'required|email|max:60'

        ];
    }

    public function messages()
    {
        return [
            'email.required' => 'لطفا نام خود را وارد کنید',
            'email.email' => 'ایمیل باید از نوع ایمیل باشد',
            'email.max:30' => 'نام نباید بیش از 60 کلمه باشه',


        ];
    }
}
