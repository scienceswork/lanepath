<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateAvatarRequest;
use App\Http\Requests\UpdatePasswordRequest;
use App\Http\Requests\UpdateUserInfoRequest;
use Session;

class SettingController extends Controller
{
    /**
     * 权限控制
     * SettingController constructor.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * 我的信息
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('setting.index');
    }

    /**
     * 提交我的信息
     * @param UpdateUserInfoRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function infoStore(UpdateUserInfoRequest $request)
    {
        // 更新信息
        $request->updateInfo();
        // 设置成功消息
        Session::flash('success', '修改信息成功');
        // 重定向路由
        return redirect()->route('web.setting.index');
    }

    /**
     * 我的头像
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function avatar()
    {
        return view('setting.avatar');
    }

    /**
     * 修改头像提交
     * @param UpdateAvatarRequest $request
     * @return $this|\Illuminate\Http\RedirectResponse
     */
    public function avatarStore(UpdateAvatarRequest $request)
    {
        // 更新头像
        if ($request->updateAvatar()) {
            // 上传成功
            return redirect()->route('web.setting.avatar')->with('success', '成功上传头像');
        } else {
            // 上传失败
            return redirect()->route('web.setting.avatar')->withErrors('头像上传失败，请重试');
        }
    }

    /**
     * 我的小道
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function domain()
    {
        return view('setting.domain');
    }

    /**
     * 账号安全
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function security()
    {
        return view('setting.security');
    }

    public function securityStore(UpdatePasswordRequest $request)
    {
        if ($request->updatePassword()) {
            // 修改密码成功
            return redirect()->route('web.setting.security')->with('success', '密码修改成功.');
        } else {
            // 原密码错误，禁止修改
            return redirect()->route('web.setting.security')->withErrors('原密码错误，请重新输入.');
        }
    }
}
