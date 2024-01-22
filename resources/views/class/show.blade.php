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
    </div>
@endsection
