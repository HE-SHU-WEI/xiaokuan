@extends('layouts.app')

@section('content')
    <h2>Filtered Class List</h2>

    {{-- 顯示可選的課程類型 --}}
    <form action="{{ route('class.index') }}" method="get">
        @foreach ($classTypes as $classType)
            <label>
                <input type="checkbox" name="classTypes[]" value="{{ $classType }}"
                       {{ in_array($classType, $selectedClassTypes) ? 'checked' : '' }}>
                {{ $classType }}
            </label>
        @endforeach
        <button type="submit">Filter</button>
    </form>

    <hr>

    {{-- 顯示篩選後的課程 --}}
    @forelse ($filteredClasses as $class)
        <div>
            <a href="{{ route('showClass', ['id' => $class->id]) }}">
                <img src="{{ asset('storage/' . $class->photo) }}" alt="Class Photo">
            </a>
            <p>Class Name: {{ $class->classname }}</p>
            <p>Teacher Name: {{ $class->teachername }}</p>
            <p>Money: {{ $class->money }}</p>
            <hr>
        </div>
    @empty
        <p>No classes found.</p>
    @endforelse
@endsection





