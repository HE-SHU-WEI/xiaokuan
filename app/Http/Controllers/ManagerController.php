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

        // 处理新增老師图片上传
        $photoPath =  $request->file('photo')->getClientOriginalName();
        $request->file('photo')->storeAs('public/photos', $request->file('photo')->getClientOriginalName());




        // 创建新的老师记录
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
        // 通过 ID 查找老师
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

        // 通过 ID 查找老师
        $teacher = Userlist::findOrFail($teacherId);

        // 更新紀錄
        $teacher->name = $request->name;
        $teacher->account = $request->account;
        $teacher->introduction = $request->introduction;
        $teacher->background = $request->background;

        $photoPath = null;
        // 处理更新老師图片上传
        if ($photoPath){
        $photoPath = 'photos/' . $request->file('photo')->getClientOriginalName();

        // 将文件上传到 public/storage/photos 目录
        $request->file('photo')->storeAs('public/photos', $request->file('photo')->getClientOriginalName());
        $teacher->photo = $photoPath;
        }

        $teacher->entry = $request->entry;
        $teacher->save();

        return redirect()->route('editTeacherView')->with('success', 'Teacher updated successfully');
    }

    public function deleteTeacher($teacherId)
    {
        $teacher = Userlist::findOrFail($teacherId);
        $teacher->delete();

        return back()->with('success', 'Teacher deleted successfully');
    }

// ----------------------------------------------------------------





public function editManagerView()
    {
        // 假设管理员ID是已知的，这里我们用id为1作为示例
        $manager = Managerlist::findOrFail(1);

        return view('manager.edit_manager', compact('manager'));
    }

    // 更新管理员信息
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
            'password' => $request->password, // 考虑使用 Hash::make($request->password)
        ]);

        return redirect()->back()->with('success', 'Account updated successfully.');
    }




//----------------------------------------------------------------





// 显示学生注册页面
public function registerStudentView()
{
    // 这里返回一个用于注册学生的表单视图
    return view('manager.register_student');
}

public function registerStudent(Request $request)
{
    // 验证请求数据
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

    // 自动生成学生账号
    $latestStudent = Stulist::latest('id')->first();
    $nextId = $latestStudent ? intval(substr($latestStudent->account, 3)) + 1 : 1;
    $account = 'STU' . str_pad($nextId, 7, '0', STR_PAD_LEFT);

    // 创建新的学生记录
    $student = Stulist::create([
        'account' => $account,
        'password' => $request->password, // 考虑加密
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

    // 为学生创建课程信息表
    $this->createStudentCourseTable($account);

    Mail::to($request->input('gmail'))->send(new StudentRegistrationMail($student));
    Mail::to($request->input('pargmail'))->send(new StudentRegistrationMail($student));

    return back()->with('success', 'Student registered successfully');
}

protected function createStudentCourseTable($account)
{
    $tableName = $account;
    Schema::create($tableName, function (Blueprint $table) {
        $table->id();
        $table->string('classname');
        $table->string('classbuy');
        $table->time('watchtime');
        $table->time('videotime');
        $table->date('classend');
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


 // 編輯特定 classname 的頁面
 public function editClassView($classname)
 {
     $class = Classlist::where('classname', $classname)->first();
     if (!$class) {
         return redirect()->route('coursesView')->with('error', 'Class not found');
     }
     return view('manager.edit_class_view', ['class' => $class]);
 }


 public function updateClass(Request $request, $id)
 {
     $class = Classlist::find($id);

     if (!$class) {
         return redirect()->route('coursesView')->with('error', 'Class not found');
     }

     // 處理表單數據，更新 classname 的相關信息
     $class->classname = $request->input('classname');
     $class->link = $request->input('link');
     $class->videotime = $request->input('videotime');
     $class->introduction = $request->input('introduction');
     $class->know = $request->input('know');
     $class->forwho = $request->input('forwho');
     $class->money = $request->input('money');

     // 如果提供了新文件，處理並上傳照片
     if ($request->hasFile('photo')) {
         $photoPath = $request->file('photo')->store('photos', 'public');
         $class->photo = $photoPath;
     }

     // 儲存更新的 classname 資料
     $class->save();

     return redirect()->route('coursesView')->with('success', 'Class updated successfully');
 }


// ----------------------------------------------------------------




public function createCourse()
    {
        return view('manager.upload_course');
    }

    // 处理课程上传表单提交
    public function storeCourse(Request $request)
    {
        // 验证请求数据
        $validatedData = $request->validate([
            'classname' => 'required|string|max:255',
            'classtype' => 'required|string|max:255',
            'link' => 'required|url',
            'videotime' => 'required|string|max:10',
            'teachername' => 'required|string|max:255',
            'introduction' => 'required|string',
            'photo' => 'nullable|image',
            'know' => 'required|string|max:255',
            'forwho' => 'required|string|max:255',
            'money' => 'required|numeric',
        ]);

        // 查找教师ID
        $teacher = Userlist::where('name', $request->input('teachername'))->first();
        if (!$teacher) {
            Log::error('Teacher not found: ' . $request->input('teachername'));
            return back()->withErrors(['teachername' => 'Teacher not found'])->withInput();
        }



        // 处理图片上传
        $photoPath = $request->hasFile('photo') ? 'photos/' . $request->file('photo')->getClientOriginalName() : null;
        if ($photoPath) {
            // 将文件上传到 public/storage/photos 目录
            $request->file('photo')->storeAs('public/photos', $request->file('photo')->getClientOriginalName());
        }



        // 创建并保存课程信息
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
        ]);

// 获取课程名称
$classname = $validatedData['classname'];

// 创建以课程名称命名的新表
$this->createCourseTable($classname);


        // 重定向到课程列表或其他适当页面
        return redirect()->route('uploadCourseView')->with('success', 'Course uploaded successfully.');
    }





    protected function createCourseTable($classname)
{
    // 将课程名称格式化为适合的表名
    $tableName =  $classname;

    // 检查表是否已经存在
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
        return back()->withErrors(['student_account' => 'Student table not found']);
    }

    // 在學生的資料表中新增一筆資料，並取得課程的 videotime
    $videotime = $class->videotime;

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

    return back()->with('success', 'Student purchase record added successfully.');
}


}


