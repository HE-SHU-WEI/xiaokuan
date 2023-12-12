{{-- resources/views/manager/register_student.blade.php --}}

@extends('layouts.app')

@section('content')
    <h2>Register Student</h2>

    <form action="{{ route('manager.registerStudent') }}" method="post">
        @csrf

        <label for="account">Account:</label>
        <input type="text" name="account" required><br>

        <label for="password">Password:</label>
        <input type="password" name="password" required><br>

        <label for="name">Name:</label>
        <input type="text" name="name" required><br>

        <label for="school">School:</label>
        <input type="text" name="school" required><br>

        <label for="grade">Grade:</label>
        <input type="text" name="grade" required><br>

        <label for="gmail">Gmail:</label>
        <input type="email" name="gmail" required><br>

        <label for="stuaddress1">Student Address 1:</label>
        <input type="text" name="stuaddress1" required><br>

        <label for="stuaddress2">Student Address 2:</label>
        <input type="text" name="stuaddress2"><br>

        <label for="stuaddress3">Student Address 3:</label>
        <input type="text" name="stuaddress3"><br>

        <label for="parname">Parent Name:</label>
        <input type="text" name="parname" required><br>

        <label for="pargmail">Parent Gmail:</label>
        <input type="email" name="pargmail" required><br>

        <label for="parnumber">Parent Phone Number:</label>
        <input type="text" name="parnumber" required><br>

        <label for="Howtoknow">How to Know:</label>
        <input type="text" name="Howtoknow" required><br>

        <button type="submit">Register Student</button>
    </form>
@endsection
