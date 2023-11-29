<!-- resources/views/login.blade.php -->

@extends('layouts.app')

@section('content')
    <form method="post" action="{{ route('login') }}">
        @csrf

        <label for="account">Account:</label>
        <input type="text" name="account" id="account" required>

        <label for="password">Password:</label>
        <input type="password" name="password" id="password" required>

        <button type="submit">Login</button>
    </form>

    @if(session('error'))
        <div>{{ session('error') }}</div>
    @endif
@endsection
