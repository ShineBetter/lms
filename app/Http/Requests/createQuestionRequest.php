<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class createQuestionRequest extends FormRequest
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
            'question_title'=>'required|between:2,100|string',
            'answer_one'=>'required',
            'answer_two'=>'required',
            'answer_three'=>'required',
            'answer_four'=>'required',
        ];
    }
    public function messages()
    {
        return[
            'question_title.required'=> 'لطفا سوال را وارد نمایید',
            'question_title.between'=> 'سوال باید بین 2 تا 100 کاراکتر داشته باشد',
            'answer_one.required'=> 'لطفا سوال اول را وارد نمایید ',
            'answer_two.required'=> 'لطفا سوال دوم را وارد نمایید ',
            'answer_three.required'=> 'لطفا سوال سوم را وارد نمایید',
            'answer_four.required'=> 'لطفا سوال چهارم را وارد نمایید',

        ];
    }
}
