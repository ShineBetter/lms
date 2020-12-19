<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class formFreeRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function rules()
    {
        return [
            'name' => 'required|string|max:30',
            'phone' => 'required|max:19',
            'level' => 'required|string'

        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'لطفا نام خود را وارد کنید',
            'name.string' => 'نام باید از نوع نوشته باشد',
            'name.max:30' => 'نام نباید بیش از 30 کلمه باشه',
            'phone.required' => 'شماره را وارد کنید',
            'phone.max:19' => 'حداکثر تعداد شماره 15 رقم است',
            'level.required' => 'پایه تحصیلی را وارد کنید',
            'level.string' => 'پایه تحصیلی باید از نوع نوشتار باشد'

        ];
    }
}
