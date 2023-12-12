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





public function editManagerAccountView()
{
    // 获取需要编辑的管理員信息，如：
    $managerId = auth()->id(); // 或者其他适合您应用程序的方式
    $manager = Managerlist::findOrFail($managerId);

    return view('manager.edit_manager_account', ['manager' => $manager]);
}



public function updateManagerAccount(Request $request)
{
    $managerId = auth()->id(); // 获取当前管理员ID
    $manager = Managerlist::findOrFail($managerId);

    // 验证请求数据
    $request->validate([
        'name' => 'required|string',
        'account' => 'required|string|unique:managerlist,account,' . $managerId, // 防止账号重复
        'password' => 'nullable|string', // 如果提供了密码，则验证
    ]);

    // 更新管理员信息
    $manager->name = $request->name;
    $manager->account = $request->account;

    // 只在提供了新密码时更新密码
    if ($request->filled('password')) {
        $manager->password = $request->password; // 根据需要考虑加密密码
    }

    $manager->save();

    // 重定向到某个页面，并附带成功信息
    return redirect()->route('editManagerAccountView')->with('success', 'Account updated successfully');
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

    public function storeCourse(Request $request)
{
    try {
        // 驗證請求數據
        $request->validate([
            'classname' => 'required|string|max:255',
            'classtype' => 'nullable|string|max:255',
            'link' => 'required|url',
            'videotime' => 'required|string|max:10', // 格式 hh:mm:ss
            'teachername' => 'required|string|max:255',
            'introduction' => 'required|string',
            'photo' => 'nullable|image|max:2048',
            'know' => 'required|string|max:255',
            'forwho' => 'required|string|max:255',
            'money' => 'required|numeric',
        ]);

        // 根據 teachername 在 userlist 表中查找相應的 id
        $teacher = Userlist::where('name', $request->input('teachername'))->first();

        // 檢查是否找到相應的教師記錄
        if (!$teacher) {
            return back()->withErrors(['teachername' => 'Teacher not found'])->withInput();
        }

        // 處理圖片上傳
        $photoPath = null;
        if ($request->hasFile('photo')) {
            $photoPath = $request->file('photo')->store('public/courses');
        }

        // 儲存數據到 classlist 表
        $classlist = new Classlist([
            'classname' => $request->input('classname'),
            'classtype' => $request->input('classtype'),
            'link' => $request->input('link'),
            'teacherid' => $teacher->id,
            'teachername' => $request->input('teachername'),
            'videotime' => $request->input('videotime'), // 直接使用表單提供的時間
            'introduction' => $request->input('introduction'),
            'photo' => $photoPath,
            'know' => $request->input('know'),
            'forwho' => $request->input('forwho'),
            'money' => $request->input('money'),
        ]);
        $classlist->save();

        return redirect()->route('someRouteName')->with('success', 'Course uploaded successfully.');
    } catch (\Exception $e) {
        // 處理錯誤，例如日誌記錄或返回錯誤訊息
        Log::error('Error in storeCourse: ' . $e->getMessage());
        return back()->withErrors(['error' => 'An error occurred during course upload. ' . $e->getMessage()])->withInput();
    }
}







    public function uploadYoutubeLink(Request $request)
    {
        $request->validate([
            'youtube_link' => 'required|url',
        ]);

        $class = new Classlist();
        $class->link = $request->input('youtube_link');
        $class->save();

        return redirect()->route('manager.index')->with('success', 'YouTube link uploaded successfully!');
    }

    public function uploadTeacherInfo(Request $request)
    {
        try {
            // 檢驗請求資料
            $request->validate([
                'teacher_name' => 'required|string',
                'youtube_link' => 'required|url',
                'introduction' => 'required|string',
                'know' => 'required|string',
                'for_who' => 'required|string',
                'photo' => 'required|image|mimes:jpeg,png,jpg,gif',
                'money' => 'required|numeric',
                'classname' => 'required|string',
            ]);

            // 取得老師名字
            $teacherName = $request->input('teacher_name');
            $teacherId = Userlist::where('name', $teacherName)->value('id');

            // 上傳圖片到 storage
            $photoPath = $request->file('photo')->store('photos');

            // 取得 YouTube 影片長度
            $youtubeId = $request->input('youtube_id');
            $videoLength = $this->getYouTubeVideoLength($youtubeId);

            // 確保 $videoLength 是數字，否則設置為預設值
            $videoLength = is_numeric($videoLength) ? $videoLength : 0;

            // 處理時間格式，確保是 H:i:s 格式
            $videoTimeFormatted = $this->convertYouTubeDurationToHMS($videoLength);

            // 新增資料到 classlist
            $newClass = Classlist::create([
                'teacherid' => $teacherId,
                'teachername' => $teacherName,
                'link' => $request->input('youtube_link'),
                'videotime' => $videoTimeFormatted,
                'introduction' => $request->input('introduction'),
                'know' => $request->input('know'),
                'forwho' => $request->input('for_who'),
                'photo' => $photoPath,
                'money' => $request->input('money'),
                'classtype' => '一般課程',
                'classname' => $request->input('classname'), // 確保 classname 欄位被填充
            ]);

            // 返回成功或重定向至某頁面，包含 videotime
            return response()->json([
                'message' => 'Teacher information uploaded successfully',
                'videotime' => $newClass->videotime,
                'youtube_id' => $youtubeId,
            ], 200);

        } catch (\Exception $e) {
            // 處理錯誤，例如日誌記錄或返回錯誤訊息
            Log::error('Error in uploadTeacherInfo: ' . $e->getMessage());
            return response()->json(['error' => 'An error occurred during teacher information upload. ' . $e->getMessage()], 500);
        }
    }

    private function getYouTubeVideoLength($youtubeId)
    {
        try {
            // 初始化 Google API 客戶端
            $googleClient = new Google_Client();
            $googleClient->setDeveloperKey(env('YOUTUBE_API_KEY')); // 設定您的 Google API 金鑰

            // 初始化 YouTube 服務
            $youtube = new YouTube($googleClient); // 修改這一行

            // 使用 YouTube Data API 獲取影片詳細資訊
            $videoInfo = $youtube->videos->listVideos('contentDetails', ['id' => $youtubeId]);

            if (empty($videoInfo) || empty($videoInfo[0]->contentDetails->duration)) {
                throw new \Exception('Unable to get video information from YouTube API.');
            }

            // 提取影片的持續時間（持續時間以 PT 格式返回）
            $duration = $videoInfo[0]->contentDetails->duration;

            // 轉換 PT 格式成 H:i:s
            $videoLength = $this->convertYouTubeDurationToHMS($duration);

            return $videoLength;
        } catch (\Exception $e) {
            // 處理錯誤，例如日誌記錄或返回預設值
            Log::error('Error in getYouTubeVideoLength: ' . $e->getMessage());
            return '00:00:00'; // 或者返回其他預設值
        }
    }

    private function convertYouTubeDurationToHMS($duration)
    {
        try {
            $interval = new \DateInterval($duration);

            // 以秒為基礎計算總持續時間
            $totalSeconds = ($interval->d * 24 * 60 * 60) + ($interval->h * 60 * 60) + ($interval->i * 60) + $interval->s;

            // 格式化成 H:i:s
            $hms = gmdate('H:i:s', $totalSeconds);

            return $hms;
        } catch (\Exception $e) {
            // 處理錯誤，例如日誌記錄或返回預設值
            Log::error('Error in convertYouTubeDurationToHMS: ' . $e->getMessage());
            return '00:00:00'; // 或者返回其他預設值
        }
    }
}
