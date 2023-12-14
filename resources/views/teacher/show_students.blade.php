@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Students in {{ $classname }}</h2>

    @if (count($students) > 0)
    <ul>
        @foreach ($students as $student)
            <li>{{ $student->student_account }}</li>
        @endforeach
    </ul>
    @else
    <p>No students found for this course.</p>
    @endif

    <a href="{{ route('teacher.index', ['id' => Auth::id()]) }}" class="btn btn-primary">Back to Courses</a>
</div>
@endsection
