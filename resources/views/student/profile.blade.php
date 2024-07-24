<!-- resources/views/student/profile.blade.php -->

@extends('layouts.app')

@section('content')
    <h2>學生個人檔案</h2>

    <p><strong>帳號:</strong> {{ $student->account }}</p>
    <p><strong>密碼:</strong> {{ $student->password }}</p>
    <p><strong>姓名:</strong> {{ $student->name }}</p>
    <p><strong>學校:</strong> {{ $student->school }}</p>
    <p><strong>年級:</strong> {{ $student->grade }}</p>
    <p><strong>電子郵件:</strong> {{ $student->gmail }}</p>
    <p><strong>地址1:</strong> {{ $student->stuaddress1 }}</p>
    <p><strong>地址2:</strong> {{ $student->stuaddress2 }}</p>
    <p><strong>家長姓名:</strong> {{ $student->parname }}</p>
    <p><strong>家長電話:</strong> {{ $student->parnumber }}</p>
    <p><strong>了解途徑:</strong> {{ $student->Howtoknow }}</p>
@endsection
