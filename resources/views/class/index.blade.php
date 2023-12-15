

@extends('layouts.app')

@section('content')
    <h2>Class List</h2>

    @foreach ($classes as $class)
        <div>
            <img src="{{ asset('storage/' . $class->photo) }}" alt="Class Photo">
            <p>Class Name: {{ $class->classname }}</p>
            <p>Teacher Name: {{ $class->teachername }}</p>
            <p>Money: {{ $class->money }}</p>
        </div>
    @endforeach
@endsection