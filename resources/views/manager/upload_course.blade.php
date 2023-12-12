{{-- resources/views/upload_course.blade.php --}}

@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Upload Course</h2>
        <form action="{{ route('storeCourse') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="classname">Class Name:</label>
                <input type="text" class="form-control" name="classname" required>
            </div>

            <div class="form-group">
                <label for="classtype">Class Type:</label>
                <input type="text" class="form-control" name="classtype">
            </div>

            <div class="form-group">
                <label for="link">YouTube Link:</label>
                <input type="text" class="form-control" name="link">
            </div>

            <div class="form-group">
                <label for="videotime">Video Duration (hh:mm:ss):</label>
                <input type="text" class="form-control" name="videotime" placeholder="00:00:00">
            </div>

            <div class="form-group">
                <label for="teachername">Teacher Name:</label>
                <input type="text" class="form-control" name="teachername">
            </div>

            <div class="form-group">
                <label for="introduction">Introduction:</label>
                <textarea class="form-control" name="introduction" rows="3"></textarea>
            </div>

            <div class="form-group">
                <label for="photo">Photo:</label>
                <input type="file" class="form-control-file" name="photo">
            </div>

            <div class="form-group">
                <label for="know">Knowledge:</label>
                <input type="text" class="form-control" name="know">
            </div>

            <div class="form-group">
                <label for="forwho">For Who:</label>
                <input type="text" class="form-control" name="forwho">
            </div>

            <div class="form-group">
                <label for="money">Price:</label>
                <input type="text" class="form-control" name="money">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
