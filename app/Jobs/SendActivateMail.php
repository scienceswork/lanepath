<?php

namespace App\Jobs;

use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Mail\Mailer;
use Illuminate\Mail\Message;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Mail;

class SendActivateMail implements ShouldQueue
{
    use InteractsWithQueue, Queueable, SerializesModels;
    protected $user;

    /**
     * Create a new job instance.
     * 注入user
     * @param User $user
     */
    public function __construct(User $user)
    {
        $this->user = $user;
    }

    /**
     * Execute the job.
     */
    public function handle(Mailer $mailer)
    {
        $user = $this->user;
        // 生成验证 token，并将对应用户的验证状态设置为未验证。
        \UserVerification::generate($user);
        // 发送邮件
//        \UserVerification::send($user, '请激活你的邮箱');
        $mailer->send('emails.user-verification', ['user' => $user], function ($message) use ($user) {
            $message->to($user->email)->subject('请激活你的邮箱');
        });
    }
}
