@extends('layouts.app')

@section('content')
<div class="container">
    <h2>{{ $classname }}</h2>

    @if (count($students) > 0)
    <ul>
        @foreach ($students as $student)
            <li>{{ $student->student_account }}</li>
        @endforeach
    </ul>
    @else
    <p>此課程沒有學生</p>
    @endif

    <a href="{{ route('teacher.index', ['id' => Auth::id()]) }}" class="btn btn-primary">回前頁</a>
</div>
@endsection
