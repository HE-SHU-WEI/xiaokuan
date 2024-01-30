<!-- student/index.blade.php -->

@extends('layouts.app')

@section('content')
    <h2>歡迎登入, {{ $studentName }}</h2>

    <!-- Add a button to redirect to the class page -->
    <a href="{{ route('class.index') }}" class="btn btn-primary">去購買課程</a><br>

    <!-- Add a button to view shopping cart -->
    <a href="{{ route('cart.show') }}" class="btn btn-info">查看購物車</a>

    <a href="{{ route('watch.courses') }}" class="btn btn-success">Watch Courses</a>

    <!-- Logout button -->
    <form method="post" action="{{ route('logout') }}">
        @csrf
        <button type="submit" class="btn btn-danger">Logout</button>
    </form>
@endsection
