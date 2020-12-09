<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class editConferenceRequest extends FormRequest
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
            'picture'=>'image|max:200',
            'price'=>'required',
            'count'=>'required|integer',
            'description'=>'required|string',
            'name'=>'required|string',
            'offer'=>'nullable|integer',
            'date'=>'required'
        ];
    }
    public function messages()
    {
        return[
            'picture.required'=> 'لطفا تصویر را بارگذاری نمایید نمایید',
            'picture.image'=> 'تصویر باید از نوع عکس باشد',
            'picture.max:200'=> 'حجم تصویر نباید بیشتر از 200 کیلوبایت باشد',
            'price.required'=> 'لطفا قیمت را بارگزاری کنید',
            'count.required'=> 'لطفا ظرفیت همایش را وارد کنید',
            'count.integer'=> 'تعداد ظرفیت باید مقدار عددی باشد',
            'name.required'=> 'لطفا نام همایش را بارگذاری کنید',
            'name.string'=> 'نام باید از نوع نوشتار باشد',
            'date.required'=> 'لطفا تاریخ همایش را وارد نمایید',
            'description.required'=> 'لطفا توضیحات همایش را وارد نمایید',
            'description.string'=> 'توضیحات همایش باید از نوع نوشتار باشد',
            'offer.integer'=> 'تخفیف باید مقدار عددی باشد',

        ];
    }
}
