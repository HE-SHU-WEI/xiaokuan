@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Edit Class</h2>
        <form method="POST" action="{{ route('updateClass', ['id' => $class->id]) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="classname">Class Name</label>
                <input type="text" class="form-control" id="classname" name="classname" value="{{ $class->classname }}" required>
            </div>

            <div class="form-group">
                <label for="link">YouTube Link</label>
                <input type="text" class="form-control" id="link" name="link" value="{{ $class->link }}" required>
            </div>

            <div class="form-group">
                <label for="videotime">Video Time</label>
                <input type="text" class="form-control" id="videotime" name="videotime" value="{{ $class->videotime }}" required>
            </div>

            <div class="form-group">
                <label for="introduction">Introduction</label>
                <textarea class="form-control" id="introduction" name="introduction" rows="4" required>{{ $class->introduction }}</textarea>
            </div>

            <div class="form-group">
                <label for="know">Know</label>
                <textarea class="form-control" id="know" name="know" rows="4" required>{{ $class->know }}</textarea>
            </div>

            <div class="form-group">
                <label for="forwho">For Who</label>
                <textarea class="form-control" id="forwho" name="forwho" rows="4" required>{{ $class->forwho }}</textarea>
            </div>

            <div class="form-group">
                <label for="photo">Photo</label>
                <input type="file" class="form-control-file" id="photo" name="photo">
            </div>

            <div class="form-group">
                <label for="money">Money</label>
                <input type="number" class="form-control" id="money" name="money" value="{{ $class->money }}" required>
            </div>

            <!-- Add more form fields as needed -->

            <button type="submit" class="btn btn-primary">Update Class</button>
        </form>
    </div>
@endsection
