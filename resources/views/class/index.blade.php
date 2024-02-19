@extends('layouts.app')

@section('content')
    <h2>課程列表</h2>
    <!-- 登出按鈕 -->
    <form method="post" action="{{ route('logout') }}">
        @csrf
        <button type="submit">Logout</button>
    </form>

    {{-- 顯示可選的課程類型 --}}
    <form action="{{ route('class.index') }}" method="get">
        @foreach ($classTypes as $classType)
            <label>
                <input type="checkbox" name="classTypes[]" value="{{ $classType }}"
                       {{ in_array($classType, $selectedClassTypes) ? 'checked' : '' }}>
                {{ $classType }}
            </label>
        @endforeach
        <button type="submit">選擇</button>
    </form>

    <hr>

    {{-- 顯示篩選後的課程 --}}
    @forelse ($filteredClasses as $class)
        <div>
            <a href="{{ route('showClass', ['id' => $class->id]) }}">
                <img src="{{ asset('storage/' . $class->photo) }}" alt="Class Photo">
            </a>
            <p>課程名稱 : {{ $class->classname }}</p>
            <p>教師 : {{ $class->teachername }}</p>
            <p>價格 : {{ $class->money }}</p>
            <hr>
        </div>
    @empty
        <p>無課程</p>
    @endforelse


@endsection
