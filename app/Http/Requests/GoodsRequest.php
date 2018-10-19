<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GoodsRequest extends FormRequest
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
            'goods_name' => 'required',
            'markte_price' => 'required|regex:/^\d+\.\d{0,2}$/',
            'shop_price' => 'required|regex:/^\d+\.\d{0,2}$/',
            'goods_desc' => 'required',
//            'goods_img' => 'required',
//            'img' => 'required',
            'goods_weight' => 'required|regex:/^\d+\.\d{0,2}$/',

        ];
    }

    /**
     * 验证提示
     */
    public function messages()
    {
       return [
            'goods_name.required' => '商品名称不能为空~',
            'markte_price.regex' => '商品市场价格,格式不正确~',
            'markte_price.required' => '商品市场价格,不能为空~',
            'shop_price.regex' => '商品本店价格,格式不正确~',
            'shop_price.required' => '商品本店价格,不能为空~',
            'goods_weight.regex' => '商品重量格式不正确~',
            'goods_weight.required' => '商品重量,不能为空~',
            'goods_desc.required' => '商品描述,不能为空~',
//            'goods_img.required' => '商品主图,不能为空~',
//            'img.required' => '商品相册,不能为空~',
       ];
    }
}
