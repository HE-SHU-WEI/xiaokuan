<?php

// app/Http/Controllers/StudentController.php
namespace App\Http\Controllers;
use App\Models\Stulist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use App\Mail\PurchaseConfirmation;

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

        // 傳遞資訊到視圖
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

        Mail::to($student->gmail)->send(new PurchaseConfirmation());


        if ($student->pargmail) {
            Mail::to($student->pargmail)->send(new PurchaseConfirmation());
        }

        // // 更新学生的购买状态为 "BUY"
        // $studentTableName = $studentAccount;
        // $classname = $request->input('classname');

        // // 更新数据库中的classbuy列为"BUY"
        // DB::table($studentTableName)
        //     ->where('classname', $classname)
        //     ->update(['classbuy' => 'BUY']);

        return redirect()->route('student.index')->with('success', 'Purchase successful, emails sent');
    } else {
        return redirect()->route('login.form')->with('error', 'Student data not found');
    }
}


public function showWatchVideo($classname)
    {
        // 查询 classlist 信息
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

        // 获取观看时间（以秒为单位）
        $watchTimeSeconds = abs((int)$request->input('watchTime'));

        // 获取当前学生账号
        $studentAccount = Session::get('remembered_account');
        $studentTableName = $studentAccount;

        // 查询当前课程的观看时间信息（以秒为单位）
        $currentWatchTime = DB::table($studentTableName)
            ->where('classname', $classname)
            ->value('watchtime');

        // 确保成功获取到当前观看时间
        if ($currentWatchTime !== null) {
            // 计算当前观看时间的秒数
            list($hours, $minutes, $seconds) = sscanf($currentWatchTime, "%d:%d:%d");
            $currentWatchTimeSeconds = $hours * 3600 + $minutes * 60 + $seconds;

            // 计算更新后的观看时间（以秒为单位）
            $updatedWatchTimeSeconds = $currentWatchTimeSeconds + $watchTimeSeconds;

            // 将最终观看时间转换为 HH:MM:SS 格式
            $finalWatchTimeFormatted = $this->formatTime($updatedWatchTimeSeconds);

            // 更新数据库中的观看时间信息
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
