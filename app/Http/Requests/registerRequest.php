<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class registerRequest extends FormRequest
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
          'username' => 'required|unique:users|regex:/\w{4,18}/',
          'email'=>'required|unique:users|email',
          'phone'=>'required|unique:users|digits_between:1,12',
          'password'=>'required|regex:/\w{6,18}/',
          'repassword'=>'required|regex:/\w{6,18}/',
        ];
    }

    public function messages()
    {
      return [
        'username.required'=>'用户名不能为空',
        'username.nuique'=>'用户名已占用，请输入其他用户名',
        'username.regex'=>'用户名格式错误，请输入4到18位字母数字下划线',
        'email.required'=>'邮箱地址不能为空',
        'email.nuique'=>'邮箱地址已占用，请输入其他邮箱地址',
        'email.email'=>'邮箱地址格式错误',
        'phone.required'=>'电话号码不能为空',
        'phone.nuique'=>'电话号码已占用，请输入其他电话号码',
        'phone.digits_between'=>'请输入1-12位电话',
        'password.required'=>'密码不能为空',
        'password.regex'=>'密码格式错误，请输入6到18位字母数字下划线',
        'repassword.required'=>'重复密码不能为空',
        'repassword.regex'=>'重复密码格式错误，请输入6到18位字母数字下划线',
      ];
    }
  }
