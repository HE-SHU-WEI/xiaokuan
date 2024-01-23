@extends('layouts.app')

@section('content')
    <div>
        <h2>{{ $class->classname }}</h2>
        <img src="{{ asset('storage/' . $class->photo) }}" alt="Class Photo">
        <p>Class Name: {{ $class->classname }}</p>
        <p>Teacher Name: {{ $class->teachername }}</p>
        <p>Money: {{ $class->money }}</p>
        <p>Video Time: {{ $class->videotime }}</p>
        <p>Introduction: {{ $class->introduction }}</p>
        <p>For Who: {{ $class->forwho }}</p>
        <p>Know: {{ $class->know }}</p>

        @if(session()->has('remembered_account'))
            <!-- 如果 Session 中有填入 remembered_account，顯示加入購物車按鈕 -->
            <form method="post" action="{{ route('addToCart', ['id' => $class->id]) }}">
                @csrf
                <button type="submit">加入購物車</button>
            </form>
        @else
            <!-- 如果 Session 中沒有填入 remembered_account，顯示提示訊息並提供登入連結 -->
            <p>請先登入以加入購物車。</p>
            <a href="{{ route('login.form') }}">點此登入</a>
        @endif
    </div>
@endsection

@if(session()->has('remembered_account'))
    {{-- Session 中有填入 remembered_account --}}
    <p>Remembered Account: {{ session('remembered_account') }}</p>
@else
    {{-- Session 中沒有填入 remembered_account --}}
    <p>No remembered account found in session.</p>
@endif
