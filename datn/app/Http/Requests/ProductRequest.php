<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
            'product_name'=>'required',
            'product_quantily'=>'required|min:1',
            'product_description'=>'required',
            'product_price'=>'required|min:4|regex:/^(\d+(,\d{1,2})?)?$/',
            'image_gallery'=>'required|image'
        ];
    }
    public function messages(){
        return [
            'product_name.required' => 'Tên sản phẩm trống',
            'product_quantily.required' => 'Số lượng sản phẩm trống',
            'product_quantily.min'=>'Số lượng có ít nhất 1 sản phẩm',
            'product_description.required' => 'Mổ tả trống',
            'product_price.required' => 'Giá sản phẩm trống',
            'product_price.min'=>'Giá sản phẩm phải lớn hơn 1000đ',
            'product_price.regex' => 'Giá sản phẩm phải lớn hơn 1000đ',
            'image_gallery.required' => 'ảnh trống',
            'image_gallery.image' => 'file phải dạng hình ảnh'
        ];
    }
}
