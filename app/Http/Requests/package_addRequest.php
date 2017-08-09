<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class package_addRequest extends FormRequest
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
          'title'=>'required|max:8',
          'nav'=>'required|max:50',
          'server'=>'required|max:50',
          'phone'=>'required|',
          'website'=>'required|max:255',
          'email'=>'required|email',
          'address'=>'required|max:255',
          'company'=>'required|max:50',
          'img1'=>'image|max:2048',
          'img2'=>'image|max:2048',
          'img3'=>'image|max:2048',
        ];
    }

    public function messages()
    {
      return [
        'title.required'=>'标题不能为空',
        'title.max'=>'标题最多8位长度',
        'nav.required'=>'导航不能为空',
        'nav.max'=>'导航不能超过50位长度',
        'server.required'=>'服务器不能为空',
        'server.max'=>'服务器名称不能超过50位长度',
        'phone.required'=>'电话不能为空',
        // 'phone.regex'=>'电话格式不对',
        'website.required'=>'网址不能为空',
        'website.max'=>'网址不能超过255个长度',
        'email.required'=>'邮箱地址不能为空',
        'email.email'=>'邮箱格式不对',
        'address.required'=>'地址不能为空',
        'address.max'=>'地址不能超过255个长度',
        'company.required'=>'公司名称不能为空',
        'company.max'=>'公司名称不能超过50位长度',
        'img1.max'=>'图片大小不能超过2M',
        'img1.image'=>'图片1格式不对',
        'img2.max'=>'图片大小不能超过2M',
        'img2.image'=>'图片2格式不对',
        'img3.max'=>'图片大小不能超过2M',
        'img3.image'=>'图片3格式不对',
      ];
    }
}
