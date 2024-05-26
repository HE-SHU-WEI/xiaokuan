<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Classlist;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;


class ClassController extends Controller
{
    public function index(Request $request)
    {
        // 獲取所有課程
        $classes = Classlist::all();

    // 過濾出 classname 沒有包含 '_' 字符的課程
    $filteredClasses = $classes->filter(function ($class) {
        return strpos($class->classname, '_') === false;
    });


        // 定義可選的課程類型
        $classTypes = [
            '大一微積分',
            '升高一銜接課程',
            '科學班準備-創思資優課程',
            '高一上',
            '高一下',
            '高二上',
            '高二下',
            '高三學測複習',
            '高三微積分',
            '高三組合課程',
            '高三進度',
            '高三分科複習',
        ];

        // 檢查是否有選擇課程類型的請求參數，如果有則獲取選擇的類型
        $selectedClassTypes = $request->input('classTypes', []);

        // 如果沒有選擇課程類型，則顯示所有課程
        $filteredClasses = empty($selectedClassTypes)
        ? $filteredClasses
        : $filteredClasses->filter(function ($class) use ($selectedClassTypes) {
            return in_array($class->forwho, $selectedClassTypes);
        });

        return view('class.index', compact('filteredClasses', 'classTypes', 'selectedClassTypes'));
    }




    public function show($id)
    {
        $class = Classlist::findOrFail($id);

        return view('class.show', compact('class'));
    }



    public function addToCart($id)
    {
        // 檢查 Session 中是否有 remembered_account
        if (session()->has('remembered_account')) {
            // 獲取當前課程
            $class = Classlist::findOrFail($id);

            // 獲取使用者的 remembered_account
            $userAccount = session('remembered_account');


            // 插入資料到使用者的資料表，將classend設置為NULL
            DB::table($userAccount)->insert([
                'classname' => $class->classname,
                'classbuy' => 'NOBUY',
                'watchtime' => '00:00:00',
                'videotime' => $class->videotime,
                'classend' => '9999-12-31', // 將classend設置為NULL
            ]);

            return redirect()->route('showClass', ['id' => $id])->with('success', '課程已加入購物車');
        } else {
            // 如果未登入，存儲當前 URL 到 Session 並重定向到登入頁面
            session(['redirectClass' => route('showClass', ['id' => $id])]);

            return redirect()->route('login.form')->with('error', '請先登入');
        }
    }














}
