{{-- resources/views/manager/create_teacher.blade.php --}}

@extends('layouts.app')

@section('content')
    <h2>Create New Teacher</h2>

    <form action="{{ route('manager.storeTeacher') }}" method="post" enctype="multipart/form-data">
        @csrf
        <label for="name">Name:</label>
        <input type="text" name="name" required><br>

        <label for="account">Account:</label>
        <input type="text" name="account" required><br>

        <label for="password">Password:</label>
        <input type="password" name="password" required><br>

        <label for="introduction">Introduction:</label>
        <textarea name="introduction"></textarea><br>

        <label for="background">Background:</label>
        <textarea name="background"></textarea><br>

        <label for="photo">Photo:</label>
        <input type="file" name="photo"><br>

        <label for="entry">Entry Date:</label>
        <input type="date" name="entry"><br>

        <button type="submit">Create Teacher</button>
    </form>
@endsection
