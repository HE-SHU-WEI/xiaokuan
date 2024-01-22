@extends('layouts.app')

@section('content')
    <h2>Main Page</h2>

    <div>
        <a href="{{ route('class.index') }}">Go to Class Page</a>
    </div>

    <div>
        <a href="{{ route('login') }}">Go to Login Page</a>
    </div>
@endsection
