<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class createProductRequest extends FormRequest
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
            'product_name' => 'required|string|max:50',
            'product_discount' => 'integer|between:0,100',
            'product_price' => 'required|integer|min:0',
            'product_img' => 'required|image|max:720',
            'product_short_desc' => 'required|string|max:150',
            'product_desc' => 'required|string|max:500',
            'category_id' => 'required|integer',
            'product_file' => 'required|file|max:102400',
        ];
    }

    public function messages()
    {
        return [
            'product_name.string' => 'نام محصول باید از نوع رشته ای باشد',
            'product_name.required' => 'وارد کردن نام محصول الزامی است',
            'product_name.max' => 'نام محصول باید حداکثر 50 کاراکتر باشد',
            'product_discount.integer' => 'فیلد تخفیف از نوع اعداد باشد',
            'product_discount.between' => 'تخفیف محصول باید بین 0 تا 100 درصد باشد',
            'product_price.integer' => 'فیلد قیمت از نوع اعداد باشد',
            'product_price.required' => 'وارد کردن قیمت محصول الزامی است',
            'product_price.min' => 'قیمت محصول باید حداقل 0 تومان باشد',
            'product_img.image' => 'فیلد تصویر محصول باید از نوع تصویر (jpg, png ,...) باشد',
            'product_img.required' => 'بارگزاری تصویر محصول الزامی است',
            'product_img.max' => 'تصویر محصول محصول باید حداکثر 700 کیلوبایت باشد',
            'product_short_desc.string' => 'فیلد توضیح مختصر محصول باید از نوع رشته ای باشد',
            'product_short_desc.required' => 'وارد کردن توضیح مختصر محصول الزامی است',
            'product_short_desc.max' => 'توضیح مختصر محصول باید حداکثر 150 کاراکتر باشد',
            'product_desc.string' => 'فیلد توضیح کامل محصول باید از نوع رشته ای باشد',
            'product_desc.required' => 'وارد کردن توضیح کامل محصول الزامی است',
            'product_desc.max' => 'توضیح کامل محصول باید حداکثر 500 کاراکتر باشد',
            'category_id.integer' => 'مقدار ارسالی دسته بندی محصول باید از نوع اعداد باشد',
            'category_id.required' => 'وارد کردن دسته بندی محصول الزامی است',
            'product_file.file' => 'فیلد فایل محصول باید از نوع فایل باشد',
            'product_file.required' => 'بارگزاری فایل محصول الزامی است',
            'product_file.max' => 'فایل محصول باید حداکثر 100 مگ باشد',
        ];
    }
}
