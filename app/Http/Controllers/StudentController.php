<?php

// app/Http/Controllers/StudentController.php
namespace App\Http\Controllers;
use App\Models\Stulist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use App\Mail\PurchaseConfirmation;
use App\Models\Classlist;


class StudentController extends Controller
{


    public function index()
    {
        // 獲取全域的學生帳號
        $studentAccount = Session::get('remembered_account');

        // 根據學生帳號在 Stulist 中搜尋名字
        $student = Stulist::where('account', $studentAccount)->first();

        if ($student) {
            // 如果找到學生，將名字傳遞到視圖
            $studentName = $student->name;

            // 在這裡使用 $studentName 顯示或進行其他操作
            return view('student.index', compact('studentName'));
        } else {
            // 如果未找到學生，處理錯誤或重新導向
            return redirect()->route('login.form')->with('error', '學生資料不存在');
        }
    }





//----------------------------------------------------------------
//購物車



    public function showShoppingCart()
    {
        $rememberedAccount = session('remembered_account');

        $student = $rememberedAccount;
        if ($student) {
            // 獲取此學生的專屬資料表名稱
            $studentTableName = $rememberedAccount;

            // 查詢購物車中的課程
            $cartItems = DB::table($studentTableName)
                ->select('*')
                ->where('classbuy', '=', 'NOBUY')
                ->get();

            // 透過 classname 查詢 classlist 資訊
            $cartDetails = [];
            foreach ($cartItems as $item) {
                $classInfo = DB::table('classlist')
                    ->where('classname', $item->classname)
                    ->first();

                $cartDetails[] = [
                    'photo' => $classInfo->photo,
                    'forwho' => $classInfo->forwho,
                    'money' => $classInfo->money,
                ];
            }

            return view('student.shopping_cart', compact('cartItems', 'cartDetails'));
        } else {
            return redirect()->route('login.form')->with('error', '學生資料不存在');
        }
    }

//----------------------------------------------------------------
//看課程
public function showWatchCourses()
{
    // 獲取目前登入學生的專屬資料表名稱
    $rememberedAccount = session('remembered_account');
    $student = $rememberedAccount;

    if ($student) {
        // 使用 $student->remembered_account 或其他相關的字段來獲取專屬資料表名稱
        $studentTableName = $student;

        // 查詢 classbuy 是 "BUY" 的所有課程
        $watchCourses = DB::table($studentTableName)
            ->where('classbuy', 'BUY')
            ->get();

        // 透過 classname 查詢 classlist 資訊
        $courseDetails = [];
        foreach ($watchCourses as $course) {
            $classInfo = DB::table('classlist')
                ->where('classname', $course->classname)
                ->first();

            if ($classInfo) {
                $videotime = (DB::table($rememberedAccount)
                    ->where('classname', $course->classname)
                    ->value('videotime'));

                $watchtime = (DB::table($rememberedAccount)
                    ->where('classname', $course->classname)
                    ->value('watchtime'));


                if ($videotime > 0) {
                    $watchtimeint = intval($watchtime);
                    $videotimeint = intval($videotime);
                    $progressPercentage = intval(($watchtimeint / $videotimeint) * 100);
                } else {

                    $progressPercentage = 0;
                }


                $courseDetails[] = [
                    'photo' => $classInfo->photo,
                    'classname' => $classInfo->classname,
                    'videotime' => $videotime,
                    'watchtime' => $watchtime,
                    'progressPercentage' => $progressPercentage,
                ];
            }
        }


        return view('student.watch_courses', compact('watchCourses', 'courseDetails'));
    } else {
        return redirect()->route('login.form')->with('error', '學生資料不存在');
    }
}


    //----------------------------------------------------------------
    //

//     public function showWatchVideo($classname)
// {
//     // 查詢 classlist 資訊
//     $classInfo = DB::table('classlist')
//         ->where('classname', $classname)
//         ->first();

//     if ($classInfo) {
//         $link = $classInfo->link;
//         return view('student.watch_video', compact('link'));
//     } else {
//         // 若找不到相應課程，可進行處理或重新導向
//         return redirect()->route('student.index')->with('error', '課程資訊不存在');
//     }
// }




//----------------------------------------------------------------

public function purchase(Request $request)
{
    $studentAccount = Session::get('remembered_account');
    $student = Stulist::where('account', $studentAccount)->first();

    if ($student) {
        // 獲取選擇的課程名稱列表
        $selectedCourses = $request->input('selected_courses');

        // 初始化總金額
        $totalPrice = 0;

        // 初始化選擇的課程清單
        $coursesList = '';

        // 遍歷所選課程，計算總金額並構建課程清單
        foreach ($selectedCourses as $courseName) {
            $class = Classlist::where('classname', $courseName)->first();

            if ($class) {
                $totalPrice += $class->money;
                $coursesList .= $courseName . ', ';
            }
        }

        // 刪除最後的逗號和空格
        $coursesList = rtrim($coursesList, ', ');

        // 將所選課程名稱列表轉換為字串
        $selectedCoursesString = implode(', ', $selectedCourses);

        // 發送購買確認郵件給學生，包含所選課程清單和總金額
        Mail::to($student->gmail)->send(new PurchaseConfirmation($selectedCoursesString, $totalPrice));

        // 返回成功信息
        return redirect()->route('student.index')->with('success', 'Purchase successful, email sent');
    } else {
        return redirect()->route('login.form')->with('error', 'Student data not found');
    }
}






//---------------------------------------------------------------------


public function showWatchVideo($classname)
    {
        // 查询 classlist
        $classInfo = DB::table('classlist')
            ->where('classname', $classname)
            ->first();

        if ($classInfo) {
            $link = $classInfo->link;
            $classname = $classInfo->classname;

            return view('student.watch_video', compact('link', 'classname'));
        } else {

            return redirect()->route('student.index')->with('error', '課程不存在');
        }
    }

    private function formatTime($seconds) {
        $hours = floor($seconds / 3600);
        $minutes = floor(($seconds % 3600) / 60);
        $remainingSeconds = $seconds % 60;

        return sprintf('%02d:%02d:%02d', $hours, $minutes, $remainingSeconds);
    }



    public function updateWatchTime(Request $request)
    {
        $classname = $request->input('classname');


        $watchTimeSeconds = abs((int)$request->input('watchTime'));


        $studentAccount = Session::get('remembered_account');
        $studentTableName = $studentAccount;


        $currentWatchTime = DB::table($studentTableName)
            ->where('classname', $classname)
            ->value('watchtime');


        if ($currentWatchTime !== null) {

            list($hours, $minutes, $seconds) = sscanf($currentWatchTime, "%d:%d:%d");
            $currentWatchTimeSeconds = $hours * 3600 + $minutes * 60 + $seconds;


            $updatedWatchTimeSeconds = $currentWatchTimeSeconds + $watchTimeSeconds;

            //  HH:MM:SS 格式
            $finalWatchTimeFormatted = $this->formatTime($updatedWatchTimeSeconds);

            // 更新
            DB::table($studentTableName)
                ->where('classname', $classname)
                ->update(['watchtime' => $finalWatchTimeFormatted]);

            return response()->json([
                'success' => true,
                'message' => '觀看時間更新成功',
                'watchTime' => $finalWatchTimeFormatted,
                'classname' => $classname,
            ]);
        } else {
            return response()->json([
                'success' => false,
                'message' => '未找到課程資訊或觀看時間',
                'watchTime' => null,
                'classname' => $classname,
            ]);
        }
    }








}
