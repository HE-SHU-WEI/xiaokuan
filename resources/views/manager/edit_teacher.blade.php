{{-- resources/views/manager/edit_teacher.blade.php --}}

@extends('layouts.app')

@section('content')
    <h2>Edit Teachers</h2>

    <a href="{{ route('manager.createTeacherView') }}">新增老師</a>

    <ul>
        @foreach ($teachers as $teacher)
            <li>
                {{ $teacher->name }} - {{ $teacher->account }}

                <a href="{{ route('manager.editTeacherForm', $teacher->id) }}">編輯</a>

                <form action="{{ route('manager.deleteTeacher', $teacher->id) }}" method="POST" style="display: inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">刪除</button>
                </form>
            </li>
        @endforeach
    </ul>
@endsection
