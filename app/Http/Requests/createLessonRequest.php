<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class createLessonRequest extends FormRequest
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
            'lesson_title' => 'required|string|between:3,50|alpha',
            'level_id' => 'required|integer'
        ];
    }
    public function messages()
    {
        return[
            'lesson_title.required'=> 'لطفا عنوان پایه تحصیلی را وارد نمایید',
            'lesson_title.between'=> 'عنوان باید بین 3 تا 50 کاراکتر داشته باشد',
            'lesson_title.string'=> 'عنوان شما باید از نوع رشته باشد',
            'lesson_title.alpha'=> 'عنوان شما باید فقط حروف باشد',
            'level_id.required'=> 'انتخاب پایه الزامی است',
            'level_id.integer'=> 'پایه باید عددی باشد',
        ];
    }
}
