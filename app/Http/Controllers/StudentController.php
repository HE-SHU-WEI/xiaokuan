<?php

// app/Http/Controllers/StudentController.php

namespace App\Http\Controllers;
use App\Models\Stulist;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

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




}
