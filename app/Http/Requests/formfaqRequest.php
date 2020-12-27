<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class formfaqRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return string[]
     */
    public function rules()
    {
        return [
            'name' => 'required|string|max:30',
            'phone' => 'required|max:19',
            'subject' => 'required|string',
            'text' => 'required|string'

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
            'subject.required' => 'موضوع را وارد کنید',
            'subject.string' => 'موضوع باید از نوع نوشتار باشد',
            'text.required' => 'پیام را وارد کنید',
            'text.string' => 'پیام از نوع نوشتار باشد'

        ];
    }
}
