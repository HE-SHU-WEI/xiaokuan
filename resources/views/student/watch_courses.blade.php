<!-- resources/views/student/watch_courses.blade.php -->

@extends('layouts.app')

@section('content')
    <h2>觀看課程</h2>

    @if(count($watchCourses) > 0)
        <table class="table">
            <tbody>
                @foreach($courseDetails as $index => $course)
                    <tr>
                        <td>
                            <div>
                                <a href="{{ route('watch.video', ['classname' => $course['classname']]) }}" target="_blank">
                                    <img src="{{ asset('storage/' . $course['photo']) }}" style="max-width: 100px;">
                                </a>
                            </div>
                            <div>
                                <a href="{{ route('watch.video', ['classname' => $course['classname']]) }}" target="_blank">
                                    {{ $course['classname'] }}
                                </a>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p>您沒有購買任何課程</p>
    @endif

    <a href="{{ route('student.index') }}" class="btn btn-primary">回前頁</a>
@endsection
