<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class createQuizRequest extends FormRequest
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
            'quiz_name'=>'required|between:2,70|string',
            'quiz_start'=>'required',
            'quiz_exp'=>'required',
            'quiz_start_date'=>'required',
            'quiz_exp_date'=>'required',
        ];
    }
    public function messages()
    {
        return[
            'quiz_name.required'=> 'لطفا نام آزمون را وارد نمایید',
            'quiz_name.between'=> 'نام آژمون باید بین 2 تا 70 کاراکتر داشته باشد',
            'quiz_name.string'=> 'عنوان شما باید از نوع حروف بدون عدد و علامت باشد ',
            'quiz_start.required'=> 'لطفا زمان شروع آزمون را وارد نمایید',
            'quiz_exp.required'=> 'لطفا زمان اتمام آزمون را وارد نمایید',
            'quiz_start_date.required'=> 'لطفا تاریخ شروع آزمون را وارد نمایید',
            'quiz_exp_date.required'=> 'لطفا تاریخ اتمام آزمون را وارد نمایید',

        ];
    }
}
