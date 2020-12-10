<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class editQuestionRequest extends FormRequest
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
            'question_title'=>'between:2,100|string',
            'answer_one'=>'',
            'answer_two'=>'',
            'answer_three'=>'',
            'answer_four'=>'',
        ];
    }
    public function messages()
    {
        return[
            'question_title.between'=> 'سوال باید بین 2 تا 100 کاراکتر داشته باشد',
        ];
    }
}
