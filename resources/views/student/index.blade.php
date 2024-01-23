<!-- student/index.blade.php -->

@extends('layouts.app')

@section('content')
    <h2>Welcome, {{ $studentName }}</h2>

    <!-- Add a button to redirect to the class page -->
    <a href="{{ route('class.index') }}" class="btn btn-primary">Go to Classes</a>
@endsection


