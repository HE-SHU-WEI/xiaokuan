{{-- resources/views/manager/edit_teacher_form.blade.php --}}

@extends('layouts.app')

@section('content')
    <h2>編輯老師資訊</h2>

    <form action="{{ route('manager.updateTeacher', $teacher->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <label for="name">姓名:</label>
        <input type="text" name="name" value="{{ $teacher->name }}" required><br>

        <label for="account">帳號:</label>
        <input type="text" name="account" value="{{ $teacher->account }}" required><br>

        <label for="introduction">介紹:</label>
        <textarea name="introduction">{{ $teacher->introduction }}</textarea><br>

        <label for="background">老師背景:</label>
        <textarea name="background">{{ $teacher->background }}</textarea><br>

        <label for="photo">照片:</label>
        <input type="file" name="photo"><br>

        <label for="entry">加入時間:</label>
        <input type="date" name="entry" value="{{ $teacher->entry }}"><br>

        <button type="submit">更新</button>
    </form>
@endsection
