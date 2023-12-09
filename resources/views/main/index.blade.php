@extends('layouts.app')

@section('content')
    <h2>Main Page</h2>
    <p>Welcome to the main page!</p>

    <div>
        <a href="{{ route('class.index') }}">Go to Class Page</a>
    </div>

    <div>
        <a href="{{ route('login') }}">Go to Login Page</a>
    </div>
@endsection
