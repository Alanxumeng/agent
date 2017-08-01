<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class personRequest extends FormRequest
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
          'nick'        =>  'required|alpha_num|between:4,8',
          'email'=>'required|unique:admin|email',
          'phone'=>'required|unique:admin|regex:/^1[34578][0-9]{9}$/',
        ];
    }

        /**
     * 获取被定义验证规则的错误消息.
     *
     * @return array
     * @translator laravelacademy.org
     */
    public function messages(){
        return [
            'nick.required'         =>  '客户名称不能为空',
            'nick.alpha_num'        =>  '客户名称必须是中文或数字或字母，请重新输入',
            'nick.between'          =>  '请输入4~8位的用户名',
            'phone.regex'           =>  '手机号码格式不正确',
            'email.email'           =>  '邮箱格式不正确',
        ];
    }
}
