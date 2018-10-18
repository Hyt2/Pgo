<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NoticeRequest extends FormRequest
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
            'title' => 'regex:/^.{5,60}$/',
            'notice_name' => 'regex:/^.{6,18}$/',
            'content' => 'required',
        ];
    }

    /**
     * 获取已定义验证规则的错误信息
     */
    public function  messages()
    {
        return [
            'title.regex' => '公告标题长度不符合',
            'notice_name.regex' => '作者字符不符合',
            'content.required' => '请填写文章内容',
        ];
    }
}
