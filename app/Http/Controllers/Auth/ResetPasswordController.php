<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;
use App\Models\Stulist;

class ResetPasswordController extends Controller
{
    public function showResetForm(Request $request, $token = null)
    {
        return view('auth.passwords.reset')->with(
            ['token' => $token, 'email' => $request->email]
        );
    }

    public function reset(Request $request)
{
    $request->validate([
        'token' => 'required',
        'account' => 'required',
        'password' => 'required|confirmed',
    ]);


    $user = Stulist::where('account', $request->account)->first();

    // 檢查是否有這個學生
    if (!$user) {
        return back()->withErrors(['account' => '學號錯誤。']);
    }


    $status = Password::broker('stulist')->reset(
        $request->only('account', 'password', 'password_confirmation', 'token'),
        function ($user, $password) {

            // 更新密碼
            $user->forceFill([
                'password' => $password,
            ])->save();
        }
    );

    // 根据重置密码操作的结果返回相应的响应
    return $status === Password::PASSWORD_RESET
        ? redirect()->route('login')->with('status', __($status))
        : back()->withErrors(['account' => [__($status)]]);
}
}
