<?php

//managercontroller


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Classlist;
use App\Models\Userlist;
use App\Models\Managerlist;
use App\Models\Stulist;
use Illuminate\Support\Facades\Log;
use App\Http\Requests\UpdateClassRequest;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Mail;
use App\Mail\StudentRegistrationMail;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Carbon;
use App\Models\EmailContent;




class ManagerController extends Controller
{

    public function editTeacherView()
    {

        $teachers = Userlist::all();


        return view('manager.edit_teacher', ['teachers' => $teachers]);
    }

    public function createTeacherView()
    {

        return view('manager.create_teacher');
    }

    public function storeTeacher(Request $request)
    {

        $request->validate([
            'name' => 'required|string',
            'account' => 'required|string|unique:userlist,account',
            'password' => 'required|string|unique:userlist,password',
            'introduction' => 'nullable|string',
            'background' => 'nullable|string',
            'photo' => 'nullable|image',
            'entry' => 'nullable|date',
        ]);


        $photoPath =  $request->file('photo')->getClientOriginalName();
        $request->file('photo')->storeAs('public/photos', $request->file('photo')->getClientOriginalName());




        // 創建老師
        Userlist::create([
            'name' => $request->name,
            'account' => $request->account,
            'password' => $request->password,
            'introduction' => $request->introduction,
            'background' => $request->background,
            'photo' => 'photos/'.$photoPath,
            'entry' => $request->entry,
        ]);

        return back()->with('success', 'Teacher created successfully');
    }

    public function editTeacherForm($teacherId)
    {

        $teacher = Userlist::findOrFail($teacherId);


        return view('manager.edit_teacher_form', ['teacher' => $teacher]);
    }

    public function updateTeacher(Request $request, $teacherId)
    {

        $request->validate([
            'name' => 'required|string',
            'account' => 'required|string|unique:userlist,account,' . $teacherId,
            'introduction' => 'nullable|string',
            'background' => 'nullable|string',
            'photo' => 'nullable|image',
            'entry' => 'nullable|date',
        ]);

        // 找老師ID
        $teacher = Userlist::findOrFail($teacherId);

        // 更新紀錄
        $teacher->name = $request->name;
        $teacher->account = $request->account;
        $teacher->introduction = $request->introduction;
        $teacher->background = $request->background;

        $photoPath = null;

        if ($photoPath){
        $photoPath = 'photos/' . $request->file('photo')->getClientOriginalName();


        $request->file('photo')->storeAs('public/photos', $request->file('photo')->getClientOriginalName());
        $teacher->photo = $photoPath;
        }

        $teacher->entry = $request->entry;
        $teacher->save();

        return redirect()->route('editTeacherView')->with('success', '老師資料已更新');
    }

    public function deleteTeacher($teacherId)
    {
        $teacher = Userlist::findOrFail($teacherId);
        $teacher->delete();

        return back()->with('success', '老師資料已刪除');
    }

// ----------------------------------------------------------------





public function editManagerView()
    {

        $manager = Managerlist::findOrFail(1);

        return view('manager.edit_manager', compact('manager'));
    }

    // 更新管理員
    public function updateManager(Request $request)
    {
        $manager = Managerlist::findOrFail(1);

        $request->validate([
            'name' => 'required|string',
            'account' => 'required|string|unique:managerlist,account,1',
            'password' => 'nullable|string',
        ]);

        $manager->update([
            'name' => $request->name,
            'account' => $request->account,
            'password' => $request->password,
        ]);

        return redirect()->back()->with('success', 'Account updated successfully.');
    }




//----------------------------------------------------------------

//學生註冊
public function registerStudentView()
{

    return view('manager.register_student');
}

public function registerStudent(Request $request)
{

    $request->validate([
        'password' => 'required|string',
        'name' => 'required|string',
        'school' => 'required|string',
        'grade' => 'required|string',
        'gmail' => 'required|string|email',
        'stuaddress1' => 'required|string',
        'stuaddress2' => 'nullable|string',
        'stuaddress3' => 'nullable|string',
        'parname' => 'required|string',
        'pargmail' => 'required|string|email',
        'parnumber' => 'required|string',
        'Howtoknow' => 'required|string',
    ]);

    // 生成學號
    $latestStudent = Stulist::latest('id')->first();
    $nextId = $latestStudent ? intval(substr($latestStudent->account, 3)) + 1 : 1;
    $account = 'STU' . str_pad($nextId, 7, '0', STR_PAD_LEFT);

    // 學生註冊
    $student = Stulist::create([
        'account' => $account,
        'password' => $request->password,
        'name' => $request->name,
        'school' => $request->school,
        'grade' => $request->grade,
        'gmail' => $request->gmail,
        'stuaddress1' => $request->stuaddress1,
        'stuaddress2' => $request->stuaddress2,
        'stuaddress3' => $request->stuaddress3,
        'parname' => $request->parname,
        'pargmail' => $request->pargmail,
        'parnumber' => $request->parnumber,
        'Howtoknow' => $request->Howtoknow,
    ]);

    // 創建學生個人資料表
    $this->createStudentCourseTable($account);

    Mail::to($request->input('gmail'))->send(new StudentRegistrationMail($student));
    Mail::to($request->input('pargmail'))->send(new StudentRegistrationMail($student));

    return back()->with('success', '學生註冊成功');
}

//創學生資料表
protected function createStudentCourseTable($account)
{
    $tableName = $account;
    Schema::create($tableName, function (Blueprint $table) {
        $table->id();
        $table->string('classname');
        $table->string('classbuy');
        $table->time('watchtime');
        $table->time('videotime');
        $table->date('classend')->nullable();
        $table->timestamps();
    });
}





//----------------------------------------------------------------









    public function index()
    {
        return view('manager.index');
    }







    //----------------------------------------------------------------
    // 列出所有 classname
    public function coursesView()
    {
        $classnames = Classlist::pluck('classname');
        return view('manager.courses_View', ['classnames' => $classnames]);
    }





//-----------------------------------------------------------------------------
 // 編輯特定 classname 的頁面
 public function editClassView($classname)
 {
     $class = Classlist::where('classname', $classname)->first();
     if (!$class) {
         return redirect()->route('coursesView')->with('error', '沒有此課程');
     }
     return view('manager.edit_class_view', ['class' => $class]);
 }


 public function updateClass(Request $request, $id)
 {
     $class = Classlist::find($id);

     if (!$class) {
         return redirect()->route('coursesView')->with('error', '沒有此課程');
     }

     // 處理表單數據，更新 classname 的相關信息
     $class->classname = $request->input('classname');
     $class->link = $request->input('link');
     $class->videotime = $request->input('videotime');
     $class->introduction = $request->input('introduction');
     $class->know = $request->input('know');
     $class->forwho = $request->input('forwho');
     $class->money = $request->input('money');
     $class->discountlink = $request->input('discountlink');


     if ($request->hasFile('photo')) {
         $photoPath = $request->file('photo')->store('photos', 'public');
         $class->photo = $photoPath;
     }

     // 儲存更新的 classname 資料
     $class->save();

     return redirect()->route('coursesView')->with('success', '課程更新完成');
 }


// ----------------------------------------------------------------

//創建課程
public function createCourse()
{
    return view('manager.upload_course');
}



public function storeCourse(Request $request)
{

    $validatedData = $request->validate([
        'classname' => 'required|string',
        'classtype' => 'required|string',
        'link' => 'required|url',
        'videotime' => 'required|string',
        'teachername' => 'required|string',
        'introduction' => 'required|string',
        'photo' => 'nullable|image',
        'know' => 'required|string',
        'forwho' => 'required|string',
        'money' => 'required|numeric',
        'discountlink' => 'nullable|string'
    ]);

    // 找老師ID
    $teacher = Userlist::where('name', $request->input('teachername'))->first();
    if (!$teacher) {
        Log::error('Teacher not found: ' . $request->input('teachername'));
        return back()->withErrors(['teachername' => 'Teacher not found'])->withInput();
    }

    //上傳圖片
    $photoPath = $request->hasFile('photo') ? 'photos/' . $request->file('photo')->getClientOriginalName() : null;
    if ($photoPath) {
        //上傳圖片
        $request->file('photo')->storeAs('public/photos', $request->file('photo')->getClientOriginalName());
    }

    // 創建課程
    Classlist::create([
        'classname' => $validatedData['classname'],
        'classtype' => $validatedData['classtype'],
        'link' => $validatedData['link'],
        'teacherid' => $teacher->id,
        'teachername' => $validatedData['teachername'],
        'videotime' => $validatedData['videotime'],
        'introduction' => $validatedData['introduction'],
        'photo' => $photoPath,
        'know' => $validatedData['know'],
        'forwho' => $validatedData['forwho'],
        'money' => $validatedData['money'],
        'discountlink' => $validatedData['discountlink'],
    ]);


    $classname = $validatedData['classname'];


    $this->createCourseTable($classname);


    return redirect()->route('uploadCourseView')->with('success', '上傳完成');
}



    protected function createCourseTable($classname)
{

    $tableName =  $classname;


    if (!Schema::hasTable($tableName)) {
        Schema::create($tableName, function (Blueprint $table) {
            $table->id();
            $table->string('student_account');
            $table->timestamps();
        });
    }
}








//---購買課程---------------------------------
// 學生購課畫面
public function studentPurchaseFormView()
{
    $classes = Classlist::pluck('classname'); // 取得所有課程名稱
    return view('manager.student_purchase_form', ['classes' => $classes]);
}

public function storeStudentPurchase(Request $request)
{
    $request->validate([
        'classname' => 'required|string',
        'student_account' => 'required|string|starts_with:STU',
        'student_name' => 'required|string',
        'class_expire_date' => 'required|date',
    ]);

    // 驗證課程是否存在
    $class = Classlist::where('classname', $request->classname)->first();
    if (!$class) {
        return back()->withErrors(['classname' => 'Invalid class selected']);
    }

    // 取得學生的資料表名稱，假設學號為 STU123，資料表名稱為 stu123
    $studentTableName = strtolower($request->student_account);

    // 驗證學生的資料表是否存在
    if (!Schema::hasTable($studentTableName)) {
        return back()->withErrors(['student_account' => '這個學生沒有註冊']);
    }

    // 在學生的資料表中新增一筆資料，並取得課程的 videotime
    $videotime = $class->videotime;

    // 檢查課程是否有折扣連結
    if ($class->discountlink) {
        // 解析折扣連結中的每個課程名稱
        $discountedClasses = explode('，', $class->discountlink);

        // 將每個課程名稱添加到學生的資料表中
        foreach ($discountedClasses as $discountedClass) {
            DB::table($studentTableName)->insert([
                'classname' => $discountedClass,
                'classbuy' => 'BUY',
                'watchtime' => '00:00:00',
                'classend' => $request->class_expire_date,
                'videotime' => $videotime,
            ]);

            // 將學生添加到課程名單中
            DB::table($discountedClass)->insert([
                'student_account' => $request->student_account,
            ]);
        }
    } else {
        // 如果沒有折扣連結，則照原本的流程添加課程
        DB::table($studentTableName)->insert([
            'classname' => $request->classname,
            'classbuy' => 'BUY',
            'watchtime' => '00:00:00',
            'classend' => $request->class_expire_date,
            'videotime' => $videotime,
        ]);

        DB::table($request->classname)->insert([
            'student_account' => $request->student_account,
        ]);
    }

    return back()->with('success', '學生購課成功');
}



//------------------------------------------------

// 編輯郵件內容頁面




}


