<?php

namespace App\Http\Requests;

use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;

class UpdatePasswordRequest extends FormRequest
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
     * 字段验证规则
     * @return array
     */
    public function rules()
    {
        return [
            'password' => 'required|between:6,20',
            'new_password' => 'required|between:6,20|confirmed',
        ];
    }

    /**
     * 字段提示信息
     * @return array
     */
    public function messages()
    {
        return [
            'password.required' => '请输入原密码',
            'password.between' => '原密码的长度在6-20位',
            'new_password.required' => '请输入新密码',
            'new_password.between' => '新密码的长度在6-20位',
            'new_password.confirmed' => '两次输入的密码不一致',
        ];
    }

    /**
     * 更新密码
     * @return bool
     */
    public function updatePassword()
    {
        // 查找用户
        $user = User::find(\Auth::id());
        // 判断原密码是否相等
        if (!\Hash::check($this->password, $user->password)) {
            // 原密码错误不许修改
            return false;
        } else {
            // 修改密码
            $user->password = bcrypt($this->new_password);
            $user->save();
            return $user;
        }
    }
}
