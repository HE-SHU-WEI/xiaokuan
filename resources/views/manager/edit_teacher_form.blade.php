{{-- resources/views/manager/edit_teacher_form.blade.php --}}

@extends('layouts.app')

@section('content')
    <h2>Edit Teacher</h2>

    <form action="{{ route('manager.updateTeacher', $teacher->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <label for="name">Name:</label>
        <input type="text" name="name" value="{{ $teacher->name }}" required><br>

        <label for="account">Account:</label>
        <input type="text" name="account" value="{{ $teacher->account }}" required><br>

        <label for="introduction">Introduction:</label>
        <textarea name="introduction">{{ $teacher->introduction }}</textarea><br>

        <label for="background">Background:</label>
        <textarea name="background">{{ $teacher->background }}</textarea><br>

        <label for="photo">Photo:</label>
        <input type="file" name="photo"><br>

        <label for="entry">Entry Date:</label>
        <input type="date" name="entry" value="{{ $teacher->entry }}"><br>

        <button type="submit">Update Teacher</button>
    </form>
@endsection
