@extends('layouts.app')

@section('content')
<div class="container">
    <h2>課程列表</h2>

    <ul>
        @foreach ($courses as $course)
            <li>
                <a href="{{ route('teacher.showStudents', $course->classname) }}">{{ $course->classname }}</a>
            </li>
        @endforeach
    </ul>


