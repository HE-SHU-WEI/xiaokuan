@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Register Student</h2>
    <form action="{{ route('manager.registerStudent') }}" method="post">
        @csrf

        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" class="form-control" name="password" required>
        </div>

        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" class="form-control" name="name" required>
        </div>

        <div class="form-group">
            <label for="school">School:</label>
            <input type="text" class="form-control" name="school" required>
        </div>

        <div class="form-group">
            <label for="grade">Grade:</label>
            <input type="text" class="form-control" name="grade" required>
        </div>

        <div class="form-group">
            <label for="gmail">Gmail:</label>
            <input type="email" class="form-control" name="gmail" required>
        </div>

        <div class="form-group">
            <label for="stuaddress1">Student Address 1:</label>
            <input type="text" class="form-control" name="stuaddress1" required>
        </div>

        <div class="form-group">
            <label for="stuaddress2">Student Address 2:</label>
            <input type="text" class="form-control" name="stuaddress2">
        </div>

        <div class="form-group">
            <label for="stuaddress3">Student Address 3:</label>
            <input type="text" class="form-control" name="stuaddress3">
        </div>

        <div class="form-group">
            <label for="parname">Parent Name:</label>
            <input type="text" class="form-control" name="parname" required>
        </div>

        <div class="form-group">
            <label for="pargmail">Parent Gmail:</label>
            <input type="email" class="form-control" name="pargmail" required>
        </div>

        <div class="form-group">
            <label for="parnumber">Parent Phone Number:</label>
            <input type="text" class="form-control" name="parnumber" required>
        </div>

        <div class="form-group">
            <label for="Howtoknow">How to Know:</label>
            <input type="text" class="form-control" name="Howtoknow" required>
        </div>

        <button type="submit" class="btn btn-primary">Register Student</button>
    </form>
</div>
@endsection
