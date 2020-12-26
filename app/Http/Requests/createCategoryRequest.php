<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class createCategoryRequest extends FormRequest
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
            'category_name' => 'required|string|max:50'
        ];
    }

    public function messages()
    {
        return [
            'category_name.required' => 'وارد کردن نام دسته بندی الزامی است',
            'category_name.string' => 'نام دسته بندی باید از نوع رشته ای باشد',
            'category_name.max' => 'نام دسته بندی باید حداکثر 50 کاراکتر باشد',
        ];
    }
}
