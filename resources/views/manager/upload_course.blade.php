@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Upload Course</h2>
        <form action="{{ route('storeCourse') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <!-- Class Name -->
            <div class="form-group">
                <label for="classname">Class Name:</label>
                <input type="text" class="form-control" name="classname" required>
            </div>

            <!-- Class Type -->
            <div class="form-group">
                <label for="classtype">Class Type:</label>
                <input type="text" class="form-control" name="classtype" required>
            </div>

            <!-- YouTube Link -->
            <div class="form-group">
                <label for="link">YouTube Link:</label>
                <input type="text" class="form-control" name="link" required>
            </div>

            <!-- Video Time -->
            <div class="form-group">
                <label for="videotime">Video Duration (hh:mm:ss):</label>
                <input type="text" class="form-control" name="videotime" placeholder="00:00:00" required>
            </div>

            <!-- Teacher Name -->
            <div class="form-group">
                <label for="teachername">Teacher Name:</label>
                <input type="text" class="form-control" name="teachername" required>
            </div>

            <!-- Introduction -->
            <div class="form-group">
                <label for="introduction">Introduction:</label>
                <textarea class="form-control" name="introduction" rows="3" required></textarea>
            </div>

            <!-- Knowledge -->
            <div class="form-group">
                <label for="know">Knowledge:</label>
                <input type="text" class="form-control" name="know" required>
            </div>

            <!-- For Who -->
            <div class="form-group">
                <label for="forwho">For Who:</label>
                <input type="text" class="form-control" name="forwho" required>
            </div>

            <!-- Photo -->
            <div class="form-group">
                <label for="photo">Photo:</label>
                <input type="file" class="form-control-file" name="photo">
            </div>

            <!-- Money -->
            <div class="form-group">
                <label for="money">Price:</label>
                <input type="text" class="form-control" name="money" required>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
