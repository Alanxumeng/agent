<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class person_updateRequest extends FormRequest
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
         'phone'       =>  'regex:/^1[34578][0-9]{9}$/',
         'email'       =>  'email',
         'b_bank'      =>  'alpha_num|between:2,40|',
         'b_branch'    =>  'alpha_num|between:2,20|',
         'b_account'   =>  'alpha_num|between:2,20|',
         'b_master'    =>  'alpha_num|between:2,10|',

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
           'nick.required'         =>  '姓名不能为空',
           'nick.alpha_num'        =>  '姓名必须是中文或数字或字母，请重新输入',
           'nick.between'          =>  '请输入2~6位的姓名',
           'phone.regex'           =>  '手机号码格式不正确',
           'email.email'           =>  '邮箱格式不正确',
           'b_bank.alpha_num'      =>  '开户行名称必须是中文或数字或字母，请重新输入',
           'b_bank.between'        =>  '请输入2~40位的开户行名称',
           'b_branch.alpha_num'    =>  '支行名称必须是中文或数字或字母，请重新输入',
           'b_branch.between'      =>  '请输入2~20位的支行名称',
           'b_account.alpha_num' =>  '银行账户必须是中文或数字或字母，请重新输入',
           'b_account.between'     =>  '请输入2~20位的银行账户',
           'b_master.alpha_num'  =>  '户主名称必须是中文或数字或字母，请重新输入',
           'b_master.between'      =>  '请输入2~10位的户主名称',
       ];
   }
}
