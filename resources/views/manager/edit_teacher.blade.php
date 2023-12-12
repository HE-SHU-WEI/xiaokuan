{{-- resources/views/manager/edit_teacher.blade.php --}}

@extends('layouts.app')

@section('content')
    <h2>Edit Teachers</h2>

    {{-- 新增老师的按钮 --}}
    <a href="{{ route('manager.createTeacherView') }}">Add New Teacher</a>

    {{-- 老师列表 --}}
    <ul>
        @foreach ($teachers as $teacher)
            <li>
                {{ $teacher->name }} - {{ $teacher->account }}
                {{-- 编辑按钮 --}}
                <a href="{{ route('manager.editTeacherForm', $teacher->id) }}">Edit</a>
                {{-- 删除按钮 --}}
                <form action="{{ route('manager.deleteTeacher', $teacher->id) }}" method="POST" style="display: inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </li>
        @endforeach
    </ul>
@endsection
