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
            'name'=>'required',
            'quantily'=>'required|min:1',
            'description'=>'required',
            'price'=>'required|min:4|regex:/^(\d+(,\d{1,2})?)?$/',
            'image_gallery'=>'required|image'
        ];
    }
    public function messages(){
        return [
            'name.required' => 'Tên sản phẩm trống',
            'quantily.required' => 'Số lượng sản phẩm trống',
            'quantily.min'=>'Số lượng có ít nhất 1 sản phẩm',
            'description.required' => 'Mổ tả trống',
            'price.required' => 'Giá sản phẩm trống',
            'price.min'=>'Giá sản phẩm phải lớn hơn 1000đ',
            'price.regex' => 'Giá sản phẩm phải lớn hơn 1000đ',
            'image_gallery.required' => 'ảnh trống',
            'image_gallery.image' => 'file phải dạng hình ảnh'
        ];
    }
}
