<?php

// app/Http/Controllers/LoginController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Userlist;
use App\Models\Stulist;
use App\Models\Managerlist;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('login');
    }


    public function login(Request $request)
    {
        $request->validate([
            'account' => 'required',
            'password' => 'required',
        ]);

        // 在 userlist 中尋找
        $user = Userlist::where('account', $request->account)
                        ->where('password', $request->password)
                        ->first();

                        if ($user) {
                            Auth::login($user);

                            // 登录成功，重定向到 TeacherController 的 index 方法
                            // 并传递用户ID
                            return redirect()->route('teacher.index', ['id' => $user->id]);
                        }

        // 在 stulist 中尋找
        $student = Stulist::where('account', $request->account)
            ->where('password', $request->password)
            ->first();

        if ($student) {
            Auth::login($student);

            // return redirect()->route('student.show', ['id' => $student->id]);
            return redirect()->route('student.index');
        }

        // 在 managerlist 中尋找
        $manager = Managerlist::where('account', $request->account)
            ->where('password', $request->password)
            ->first();

        if ($manager) {
            Auth::login($manager);

            return redirect()->route('manager.index');
        }

        // 登入失敗
        return redirect()->route('login.form')->with('error', 'Invalid credentials');
    }
}
