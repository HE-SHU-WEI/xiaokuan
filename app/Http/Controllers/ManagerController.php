<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Classlist;
use App\Models\Userlist;
use App\Models\Managerlist;
use App\Models\Stulist;
use Illuminate\Support\Facades\Storage;
use Google_Client;
use Google_Service_YouTube;
use Google\Service\YouTube;
use Illuminate\Support\Facades\Log;
use App\Http\Requests\UpdateClassRequest;

class ManagerController extends Controller
{

    public function editTeacherView()
    {
        // 获取所有老师的列表
        $teachers = Userlist::all(); // 这里假设 Userlist 中存储了所有老师的信息

        // 返回编辑老师的视图，并传递老师列表
        return view('manager.edit_teacher', ['teachers' => $teachers]);
    }

    public function createTeacherView()
    {
        // 这里返回一个用于创建新老师的表单视图
        return view('manager.create_teacher');
    }

    public function createTeacher(Request $request)
    {
        // 验证请求数据
        $request->validate([
            'name' => 'required|string',
            'account' => 'required|string|unique:userlist,account',
            'introduction' => 'nullable|string',
            'background' => 'nullable|string',
            'photo' => 'nullable|image',
            'entry' => 'nullable|date',
        ]);

        // 处理图片上传
        $photoPath = null;
        if ($request->hasFile('photo')) {
            $photoPath = $request->file('photo')->store('public/teachers');
        }

        // 创建新的老师记录
        Userlist::create([
            'name' => $request->name,
            'account' => $request->account,
            'introduction' => $request->introduction,
            'background' => $request->background,
            'photo' => $photoPath ? Storage::url($photoPath) : null,
            'entry' => $request->entry,
        ]);

        return back()->with('success', 'Teacher created successfully');
    }

    public function editTeacherForm($teacherId)
    {
        // 通过 ID 查找老师
        $teacher = Userlist::findOrFail($teacherId);

        // 返回编辑老师的视图，并传递老师信息
        return view('manager.edit_teacher_form', ['teacher' => $teacher]);
    }

    public function updateTeacher(Request $request, $teacherId)
    {
        // 验证请求数据
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

        // 更新老师记录
        $teacher->name = $request->name;
        $teacher->account = $request->account;
        $teacher->introduction = $request->introduction;
        $teacher->background = $request->background;

        // 处理图片上传
        if ($request->hasFile('photo')) {
            $photoPath = $request->file('photo')->store('public/teachers');
            $teacher->photo = Storage::url($photoPath);
        }

        $teacher->entry = $request->entry;
        $teacher->save();

        return redirect()->route('manager.editTeacherView')->with('success', 'Teacher updated successfully');
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

// 创建新学生
public function registerStudent(Request $request)
{
    // 验证请求数据
    $request->validate([
        'account' => 'required|string|unique:stulist,account',
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

    // 创建新的学生记录
    Stulist::create([
        'account' => $request->account,
        'password' => $request->password, // 不使用 hash，请谨慎保存明文密码
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

    return back()->with('success', 'Student registered successfully');
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
            'photo' => 'nullable|image|max:2048',
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
        $photoPath = $request->hasFile('photo') ? $request->file('photo')->store('public/courses') : null;

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

        // 重定向到课程列表或其他适当页面
        return redirect()->route('uploadCourseView')->with('success', 'Course uploaded successfully.');
    }

}
