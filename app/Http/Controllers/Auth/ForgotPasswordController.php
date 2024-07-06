<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use App\Mail\PasswordResetEmail;
use Illuminate\Auth\Passwords\PasswordBroker;
use App\Models\Stulist;

class ForgotPasswordController extends Controller
{
    protected $broker;

    public function __construct(PasswordBroker $broker)
    {
        $this->broker = $broker;
    }

    /**
     * 显示忘记密码表单。
     *
     * @return \Illuminate\View\View
     */
    public function showLinkRequestForm()
    {
        return view('auth.passwords.gmail');
    }

    /**
     * 发送重设密码链接。
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */






    public function sendResetLinkEmail(Request $request)
    {
        $request->validate([
            'account' => 'required',
            'email' => 'required|email',
        ]);

        $user = Stulist::where('account', $request->account)
            ->where('gmail', $request->email)
            ->first();

        if (!$user) {
            return back()->withErrors(['gmail' => '提供的信箱錯誤。']);
        }

        // 生成重置令牌
        $token = Password::createToken($user);

        // 创建密码重置链接
        $resetLink = url(route('password.reset', ['token' => $token, 'email' => $request->email], false));

        // 调试输出链接
        Log::info("Generated reset link: " . $resetLink);

        // 发送邮件
        Mail::to($request->email)->send(new PasswordResetEmail($resetLink));

        // 添加日志记录
        Log::info("Password reset link sent to email: " . $request->email);

        return back()->with('status', '已經發送重置密碼連結');
    }





}
