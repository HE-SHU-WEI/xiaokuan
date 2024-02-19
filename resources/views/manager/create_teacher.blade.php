{{-- resources/views/manager/create_teacher.blade.php --}}

@extends('layouts.app')

@section('content')
    <h2>Create New Teacher</h2>

    <form action="{{ route('manager.storeTeacher') }}" method="post" enctype="multipart/form-data">
        @csrf
        <label for="name">姓名:</label>
        <input type="text" name="name" required><br>

        <label for="account">帳號:</label>
        <input type="text" name="account" required><br>

        <label for="password">密碼:</label>
        <input type="password" name="password" required><br>

        <label for="introduction">介紹:</label>
        <textarea name="introduction"></textarea><br>

        <label for="background">老師背景:</label>
        <textarea name="background"></textarea><br>

        <label for="photo">照片:</label>
        <input type="file" name="photo"><br>

        <label for="entry">加入時間:</label>
        <input type="date" name="entry"><br>

        <button type="submit">創建老師資料</button>
    </form>
@endsection
