<!-- resources/views/teacher/edit.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>Edit Teacher Information</h1>

    <form action="{{ route('teacher.update', $teacher->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <label for="name">Name:</label>
        <input type="text" name="name" value="{{ $teacher->name }}" required>

        <label for="introduction">Introduction:</label>
        <textarea name="introduction" rows="4" required>{{ $teacher->introduction }}</textarea>

        <label for="background">Background:</label>
        <textarea name="background" rows="4" required>{{ $teacher->background }}</textarea>

        <label for="photo">Photo:</label>
        <input type="file" name="photo">

        <label for="entry">Entry Time:</label>
        <input type="datetime-local" name="entry" value="{{ \Carbon\Carbon::parse($teacher->entry)->format('Y-m-d\TH:i') }}" required>

        <button type="submit">Update</button>
    </form>
@endsection
