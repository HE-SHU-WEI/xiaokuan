<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Classlist;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Schema;

class TeacherController extends Controller
{
    public function index($id)
    {
        $courses = Classlist::where('teacherid', $id)->get();
        return view('teacher.index', compact('courses'));
    }

    public function showStudents($classname)
{
    // 格式化课程名称以创建合法的表名
    $tableName = $classname;

    // 检查表是否存在
    if (!Schema::hasTable($tableName)) {
        // 如果表不存在，返回错误或空学生列表
        return back()->withErrors(['error' => 'Course not found.']);
    }

    // 查询对应课程表中的学生账号
    $students = DB::table($tableName)->select('student_account')->get();

    return view('teacher.show_students', compact('classname', 'students'));
}


}
