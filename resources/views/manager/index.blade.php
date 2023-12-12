@extends('layouts.app')

@section('content')
    <h2>Manager Dashboard</h2>

    <ul>
        <li><a href="{{ route('editTeacherView') }}">编辑老师</a></li>
        <li><a href="{{ route('editManagerAccountView') }}">改管理员资料</a></li>
        <li><a href="{{ route('registerStudentView') }}">手动注册学生</a></li>
        <li><a href="{{ route('coursesView') }}">课程</a></li>
        <li><a href="{{ route('uploadCourseView') }}">上传课程</a></li>
    </ul>
@endsection
