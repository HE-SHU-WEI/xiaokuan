@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Teacher Dashboard</h2>

    <!-- 显示课程列表 -->
    <ul>
        @foreach ($courses as $course)
            <li>
                <a href="{{ route('teacher.showStudents', $course->classname) }}">{{ $course->classname }}</a>
            </li>
        @endforeach
    </ul>


