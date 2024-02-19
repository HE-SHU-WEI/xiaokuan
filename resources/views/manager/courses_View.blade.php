@extends('layouts.app')

@section('content')
    <h2>課程列表</h2>

    <ul>
        @foreach ($classnames as $className)
            <li>
                <strong>{{ $className }}</strong>
                <a href="{{ route('editClassView', ['classname' => $className]) }}">編輯</a>
            </li>
        @endforeach
    </ul>
@endsection
