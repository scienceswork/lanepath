<?php

namespace App\Http\Requests;

use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;

class UpdateAvatarRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     * 关闭权限控制
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     * 字段规则
     * @return array
     */
    public function rules()
    {
        return [
            'avatar' => 'required|mimes:jpg,jpeg,png|max:5120'
        ];
    }

    public function messages()
    {
        return [
            'avatar.required' => '请上传头像',
            'avatar.mimes' => '请上传支持的图片类型:jpg,jpeg,png',
            'avatar.max' => '请上传不大于5M的图片'
        ];
    }

    public function updateAvatar()
    {
        // 判断是否保存成功
        try {
            // 保存头像，并且获取路径
            if ($path = self::file('avatar')->store('avatar')) {
                $user = User::find(\Auth::id());
                $user->avatar = $path;
                $user->save();
                return $user;
            } else {
                return false;
            }
        } catch (\Exception $exception) {
            return false;
        }
    }
}
