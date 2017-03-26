<?php

namespace App\Http\Controllers;

use App\Jobs\SendActivateMail;
use App\Jobs\SendReminderEmail;
use App\Models\User;
use Jrean\UserVerification\Traits\VerifiesUsers;
use Cache;

class UserController extends Controller
{
    // 加载VerifiesUsers
//    use VerifiesUsers;

    public function index()
    {
        return view('user.index');
    }

    public function show($id)
    {
        // 查找用户
        $user = User::findOrFail($id);
//        $this->dispatch(new SendReminderEmail($user));
        // 渲染视图
        return view('user.show', compact('user'));
    }

    /**
     * 判断是否已经通过了邮箱验证
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Http\RedirectResponse|\Illuminate\View\View
     */
    public function emailVerificationRequired()
    {
        // 判断是否已经验证
        if (\Auth::user()->verified) {
            return redirect()->route('home');
        } else {
            return view('user.emailVerificationRequired');
        }
    }

    /**
     * 发送激活邮件
     * @return $this|\Illuminate\Http\RedirectResponse
     */
    public function sendActiveMail()
    {
        // 获取当前用户
        $user = \Auth::user();
        // 设置缓存键值名
        $cache_key = 'send_activite_mail_' . $user->id;
        // 判断缓存中是否有键值，如果有表示60秒内已经有发送过一次
        if (Cache::has($cache_key)) {
            // 重定向路由
            return redirect()->route('home')->withErrors('邮件发送失败，你执行此操作过于频繁，请于 60 秒后重试');
        } else {
            // 如果缓存中没有键值且暂无验证，则发送邮件
            if (!$user->verified) {
                // 队列发送邮件
                $this->dispatch(new SendActivateMail($user));
                // 成功发送后保存到缓存里，60秒内只能发送一次
                Cache::put($cache_key, time() + 60, 1);
                // 重定向路由
                return redirect()->route('home')->with('success', '验证邮件发送成功！请注意查收哦 ^_^');
            }
        }
        return redirect()->route('home');
    }
}
