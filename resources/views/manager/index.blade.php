@extends('layouts.app')

@section('content')
    <h2>管理員介面</h2>

    <ul>
        <li><a href="{{ route('editTeacherView') }}">編輯老師名單</a></li>
        <li><a href="{{ route('editManagerView') }}">管理員編輯</a></li>
        <li><a href="{{ route('registerStudentView') }}">學生註冊</a></li>
        <li><a href="{{ route('coursesView') }}">編輯課程</a></li>
        <li><a href="{{ route('uploadCourseView') }}">上傳課程</a></li>
        <li><a href="{{ route('studentPurchaseFormView') }}">學生購課</a></li>



    </ul>
@endsection
