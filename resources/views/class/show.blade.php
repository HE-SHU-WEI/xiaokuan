@extends('layouts.app')
@section('content')
    <div>
        <h2>{{ $class->classname }}</h2>
        <img src="{{ asset('storage/' . $class->photo) }}" alt="Class Photo">
        <p>課程名稱: {{ $class->classname }}</p>
        <p>老師: {{ $class->teachername }}</p>
        <p>價格: {{ $class->money }}</p>
        <p>課程時長: {{ $class->videotime }}</p>
        <img src="{{ asset('storage/' . $class->introduction) }}" alt="Introduction Image">
        <p>對象: {{ $class->forwho }}</p>
        <p>須知: {{ $class->know }}</p>

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
    <p>目前登入的學號: {{ session('remembered_account') }}</p>
@else
    {{-- Session 中沒有填入 remembered_account --}}
    <p>目前沒有登入</p>
@endif
