<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Userlist;
use App\Models\Stulist;
use App\Models\Managerlist;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Mail;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        // 檢查 Session 是否存在使用者的 account
        $rememberedAccount = session('remembered_account');

        return view('login', compact('rememberedAccount'));
    }

    public function login(Request $request)
    {
        $request->validate([
            'account' => 'required',
            'password' => 'required',
        ]);

        // 先清除可能存在的先前記憶的 account
        session()->forget('remembered_account');

        // 使用者登入
        $user = Userlist::where('account', $request->account)
                        ->where('password', $request->password)
                        ->first();

        if ($user) {
            Auth::guard('web')->login($user);

            // 登入成功，將 account 存入 Session
            session(['remembered_account' => $request->account]);

            return redirect()->route('teacher.index', ['id' => $user->id]);
        }

        // 學生登入
        $student = Stulist::where('account', $request->account)
            ->where('password', $request->password)
            ->first();

        if ($student) {
            Auth::guard('web')->login($student);

            // 登入成功，將 account 存入 Session
            session(['remembered_account' => $request->account]);

            return redirect()->route('student.index');
        }

        // 管理員登入
        $manager = Managerlist::where('account', $request->account)
            ->where('password', $request->password)
            ->first();

        if ($manager) {
            Auth::guard('web')->login($manager);

            // 登入成功，將 account 存入 Session
            session(['remembered_account' => $request->account]);

            return redirect()->route('manager.index');
        }

        return redirect()->route('login.form')->with('error', 'Invalid credentials');
    }



    //*----------------------------------------------------------------

    public function logout()
{
    // 清除相應的 Session 資訊
    Session::forget('remembered_account');

    // 重定向到 login.blade.php
    return redirect(route('login.form'));
}


//---------------------------
//忘記密碼
// 顯示忘記密碼表單
// public function showLinkRequestForm()
// {
//     return view('forget_password');
// }

// // 處理忘記密碼請求
// public function sendPassword(Request $request)
//     {
//         $request->validate([
//             'student_id' => 'required',
//             'email' => 'required|email'
//         ]);

//         // 查找 stulist 数据表中是否有匹配的记录
//         $student = StuList::where('account', $request->student_id)
//                           ->where('gmail', $request->email)
//                           ->first();

//         if ($student) {
//             // 找紀錄，發密碼
//             $password = $student->password;
//             $email = $student->gmail;

//             // 送出郵件
//             Mail::raw("您的密碼是: $password", function($message) use ($email) {
//                 $message->to($email)
//                         ->subject('您的帳號密碼');
//             });

//             return back()->with('status', '密碼已發送到您的 Gmail');
//         } else {
//             // 没有找到匹配的记录
//             return back()->withErrors(['student_id' => '學號或 Gmail 不正確']);
//         }
//     }





















}
