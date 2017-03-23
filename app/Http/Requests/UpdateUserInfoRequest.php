<?php

namespace App\Http\Requests;

use App\Models\User;
use Auth;
use DB;
use Illuminate\Foundation\Http\FormRequest;

class UpdateUserInfoRequest extends FormRequest
{
    protected $allow_fields = [
        'name', 'sex', 'city', 'intro'
    ];

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
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required',
        ];
    }

    public function updateInfo()
    {
        // 获取数据
        $data = $this->only($this->allow_fields);
        // 更新用户
        $user = DB::table('users')
            ->where('id', Auth::id())
            ->update($data);
        // 返回数据
        return $user;
    }
}
