<!-- resources/views/student/watch_video.blade.php -->

@extends('layouts.app')

@section('content')
    <h2>Watch Video</h2>

    <iframe width="560" height="315" src="{{ $link }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>

    <a href="{{ route('watch.courses') }}" class="btn btn-primary">Back to Watch Courses</a>
@endsection


