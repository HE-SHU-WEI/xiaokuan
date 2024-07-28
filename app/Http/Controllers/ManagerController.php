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
use App\Exports\StulistExport;
use Maatwebsite\Excel\Facades\Excel;




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
        // dd($request);
        // 驗證請求的資料
        $validatedData = $request->validate([
            'name' => 'nullable|string',
            'account' => 'nullable|string',
            'password' => 'nullable|string',
            'introduction' => 'nullable|string',
            'background' => 'nullable|string',
            'photo' => 'nullable|image|',
            'entry' => 'nullable|date',
        ]);





        // 如果有上傳照片，處理照片上傳
    if ($request->hasFile('photo')) {
        // 取得上傳的照片檔案
        $photo = $request->file('photo');

        // 將照片儲存到 public/storage/photos 資料夾中，並取得儲存後的路徑
        $photoPath = $photo->store('photos', 'public');

        // 將照片路徑加入到驗證通過的資料中
        $validatedData['photo'] = $photoPath;
    }

    // dd($validatedData);

    // 創建教師資料
    $teacher = new Userlist();
    $teacher->name = $validatedData['name'];
    $teacher->account = $validatedData['account'];
    $teacher->password = $validatedData['password'];
    $teacher->introduction = $validatedData['introduction'];
    $teacher->background = $validatedData['background'];
    $teacher->photo = $validatedData['photo'] ?? null;
    $teacher->entry = $validatedData['entry'];
    $teacher->save();

    return redirect()->route('manager.editTeacherView')->with('success', '教師新增成功！');
}








//     public function storeTeacher(Request $request)
// {
//     Log::info('Received request to store teacher', $request->all());

//     $validatedData = $request->validate([
//         'name' => 'required|string',
//         'account' => 'required|string|unique:userlist,account',
//         'password' => 'required|string|unique:userlist,password',
//         'introduction' => 'nullable|string',
//         'background' => 'nullable|string',
//         'photo' => 'nullable|image',
//         'entry' => 'nullable|date',
//     ]);

//     Log::info('Validated data', $validatedData);

//     $photoPath = $request->hasFile('photo') ? 'photos/' . $request->file('photo')->getClientOriginalName() : null;
//     if ($photoPath) {
//         $request->file('photo')->storeAs('public/photos', $request->file('photo')->getClientOriginalName());
//     }

//     try {
//         $teacher = Userlist::create([
//             'name' => $validatedData['name'],
//             'account' => $validatedData['account'],
//             'password' => $validatedData['password'],  // 请注意：实际应用中请加密密码
//             'introduction' => $validatedData['introduction'],
//             'background' => $validatedData['background'],
//             'photo' => $photoPath,
//             'entry' => $validatedData['entry'],
//         ]);

//         Log::info('Teacher created successfully', ['teacher' => $teacher]);

//         return back()->with('success', 'Teacher created successfully');
//     } catch (\Exception $e) {
//         Log::error('Failed to create teacher', ['error' => $e->getMessage()]);
//         return back()->withErrors('Failed to create teacher');
//     }
// }




    public function editTeacherForm($teacherId)
    {

        $teacher = Userlist::findOrFail($teacherId);


        return view('manager.edit_teacher_form', ['teacher' => $teacher]);
    }

    public function updateTeacher(Request $request, $teacherId)
    {

        $request->validate([
            'name' => 'nullable|string',
            'account' => 'nullable|string',
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

        return redirect()->route('manager.editTeacherView')->with('success', '老師資料已更新');
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

public function outsideregisterStudentView()
{

    return view('register_student');
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
        'parname' => 'required|string',
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
        'parname' => $request->parname,
        'parnumber' => $request->parnumber,
        'Howtoknow' => $request->Howtoknow,
    ]);

    // 創建學生個人資料表
    $this->createStudentCourseTable($account);

    Mail::to($request->input('gmail'))->send(new StudentRegistrationMail($student));

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

    // Validate the request data
    $validatedData = $request->validate([
        'classtype' => 'nullable|string',
        'link' => 'nullable|url',
        'videotime' => 'nullable|string',
        'introduction' => 'nullable|image',
        'photo' => 'nullable|image',
        'forwho' => 'nullable|string',
        'money' => 'nullable|numeric',
        'classname' => 'nullable|string',
        'discountlink' => 'nullable|string',
        'drive' => 'nullable|string',
        'classnum' => 'nullable|int',


    ]);

    // Update class data
    $class->classtype = $validatedData['classtype'] ?? $class->classtype;
    $class->link = $validatedData['link'] ?? $class->link;
    $class->videotime = $validatedData['videotime'] ?? $class->videotime;
    $class->classname = $validatedData['classname'] ?? $class->classname;
    $class->forwho = $validatedData['forwho'] ?? $class->forwho;
    $class->money = $validatedData['money'] ?? $class->money;
    $class->discountlink = $validatedData['discountlink'] ?? $class->discountlink;
    $class->drive = $validatedData['drive'] ?? $class->drive;
    $class->classnum = $validatedData['classnum'] ?? $class->classnum;

    // Handle photo upload
    if ($request->hasFile('photo')) {
        $photoPath = $request->file('photo')->store('photos', 'public');
        $class->photo = $photoPath;
    }

    // Handle introduction image upload
    if ($request->hasFile('introduction')) {
        $introductionPath = $request->file('introduction')->store('photos', 'public');
        $class->introduction = $introductionPath;
    }

    // Save the updated class data
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
        'introduction_image' => 'nullable|image',
        'photo' => 'nullable|image',
        'forwho' => 'required|string',
        'money' => 'required|numeric',
        'discountlink' => 'nullable|string',
        'drive' => 'nullable|string',
        'classnum' => 'nullable|int'
    ]);

    // Find teacher ID
    $teacher = Userlist::where('name', $request->input('teachername'))->first();
    if (!$teacher) {
        Log::error('Teacher not found: ' . $request->input('teachername'));
        return back()->withErrors(['teachername' => 'Teacher not found'])->withInput();
    }

    // Upload introduction image
    $introductionImagePath = $request->hasFile('introduction') ? 'photos/' . $request->file('introduction')->getClientOriginalName() : null;
    if ($introductionImagePath) {
        $request->file('introduction')->storeAs('public/photos', $request->file('photo')->getClientOriginalName());
    }

    // Upload main photo
    $photoPath = $request->hasFile('photo') ? 'photos/' . $request->file('photo')->getClientOriginalName() : null;
    if ($photoPath) {
        $request->file('photo')->storeAs('public/photos', $request->file('photo')->getClientOriginalName());
    }

    // Create course
    $class = new Classlist;
    $class->classname = $validatedData['classname'];
    $class->classtype = $validatedData['classtype'];
    $class->link = $validatedData['link'];
    $class->teacherid = $teacher->id;
    $class->teachername = $validatedData['teachername'];
    $class->videotime = $validatedData['videotime'];
    $class->forwho = $validatedData['forwho'];
    $class->money = $validatedData['money'];
    $class->discountlink = $validatedData['discountlink'];
    $class->introduction = $introductionImagePath;
    $class->photo = $photoPath;
    $class->drive = $validatedData['drive'];
    $class->classnum = $validatedData['classnum'];
    $class->save();

    // Create course table
    $this->createCourseTable($validatedData['classname']);

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

    // 检查是否有折扣链接
    if ($class->discountlink) {

        // 解析折扣链接中的每个课程名称，并将每个课程名称都当作课程前缀添加到学生的数据表中
        $discountedClasses = explode('，', $class->discountlink);
        // dd('sdf');
        foreach ($discountedClasses as $discountedClass) {
            // 查找与折扣课程前缀匹配的所有课程，并将它们添加到学生的数据表中
            $similarClasses = Classlist::where('classname', 'like', $discountedClass . '%')->get();

            foreach ($similarClasses as $similarClass) {
                DB::table($studentTableName)->insert([
                    'classname' => $similarClass->classname,
                    'classbuy' => 'BUY',
                    'watchtime' => '00:00:00',
                    'classend' => $request->class_expire_date,
                    'videotime' => $videotime,
                ]);
                // dd($studentTableName);
            }
        }
    } else {
        // dd('sdf');
        $similarClasses = Classlist::where('classname', 'like', $request->classname . '%')->get();

        foreach ($similarClasses as $similarClass) {
            DB::table($studentTableName)->insert([
                'classname' => $similarClass->classname,
                'classbuy' => 'BUY',
                'watchtime' => '00:00:00',
                'classend' => $request->class_expire_date,
                'videotime' => $videotime,
            ]);
            // dd($studentTableName);
        }
    }

    // 将学生添加到输入的课程名单中
    DB::table($request->classname)->insert([
        'student_account' => $request->student_account,
    ]);

    return back()->with('success', '學生購課成功');
}


//------------------------------------------------

// 編輯郵件內容頁面


//----------------------------------
//匯出學生名單
public function showStudents()
{
    $students = Stulist::all(); // 获取所有学生数据
    return view('manager.show_Students', compact('students'));
}

// public function exportStudents()
// {
//     return Excel::download(new StulistExport, 'students.xlsx'); // 导出学生数据
// }

public function deleteStudent($id)
    {
        // 找到要刪除的學生
        $student = Stulist::find($id);


        if (!$student) {
            return redirect()->back()->with('error', '找不到要刪除的學生');
        }

        $tableName = $student->account;
        // dd($tableName);

        // 刪除學生
        $student->delete();

        // 檢查並刪除對應的資料表
        if (Schema::hasTable($tableName)) {
            Schema::drop($tableName);
        }

        return redirect()->back()->with('success', '學生刪除成功');
    }


    // app\Http\Controllers\ManagerController.php

public function queryStudent(Request $request)
{
    $studentAccount = $request->input('student_account');


    $studentData = DB::table($studentAccount)->get();


    return view('manager.student_info', compact('studentData'));
}














}


