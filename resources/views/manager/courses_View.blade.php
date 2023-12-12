@extends('layouts.app')

@section('content')
    <h2>课程列表</h2>

    <ul>
        @foreach ($classnames as $className)
            <li>
                <strong>{{ $className }}</strong>
                <a href="{{ route('editClassView', ['classname' => $className]) }}">编辑</a>
            </li>
        @endforeach
    </ul>
@endsection
