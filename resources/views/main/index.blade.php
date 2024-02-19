@extends('layouts.app')

@section('content')
    <h2>莊小寬數學</h2>

    <div>
        <a href="{{ route('class.index') }}">查看課程</a>
    </div>

    <div>
        <a href="{{ route('login') }}">登入</a>
    </div>
@endsection
