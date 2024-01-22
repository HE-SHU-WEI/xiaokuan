<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Classlist;

class ClassController extends Controller
{
    public function index(Request $request)
    {
        // 獲取所有課程
        $classes = Classlist::all();

        // 定義可選的課程類型，這里使用數組表示
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
            ? $classes
            : $classes->filter(function ($class) use ($selectedClassTypes) {
                return in_array($class->forwho, $selectedClassTypes);
            });

        return view('class.index', compact('filteredClasses', 'classTypes', 'selectedClassTypes'));
    }

//----------------------------------------------------------------
    public function show($id)
    {
        // 根據課程ID查找課程
        $class = Classlist::findOrFail($id);

        return view('class.show', compact('class'));
    }
}
