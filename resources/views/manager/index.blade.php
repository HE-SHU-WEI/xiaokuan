<!-- resources/views/manager/index.blade.php -->

@extends('layouts.app')

@section('content')
    <h2>Manager Page</h2>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('manager.uploadTeacherInfo') }}" method="post" enctype="multipart/form-data">
        @csrf

        <label for="teacher_name">Teacher Name:</label>
        <input type="text" name="teacher_name" required>

        <label for="youtube_link">YouTube Link:</label>
        <input type="url" name="youtube_link" required>

        <label for="introduction">Introduction:</label>
        <textarea name="introduction" required></textarea>

        <label for="know">Know:</label>
        <textarea name="know" required></textarea>

        <label for="for_who">For Who:</label>
        <textarea name="for_who" required></textarea>

        <label for="photo">Photo:</label>
        <input type="file" name="photo" accept="image/*" required>

        <label for="money">Money:</label>
        <input type="number" name="money" required>

        <label for="type">課程種類：</label>
        <input type="text" name="type" id="type" required>

        <button type="submit">Upload Teacher Info</button>
    </form>
@endsection
