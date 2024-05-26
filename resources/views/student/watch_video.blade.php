@extends('layouts.app')

@section('content')
    <h2>觀看課程</h2>

    <iframe id="videoFrame" width="560" height="315" src="{{ $link }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>

    <h2>課程講義連結</h2>
    <div>
        {{ $drive }}
    </div>

    <a href="javascript:void(0)" id="backButton" class="btn btn-primary">回前頁</a>

    <form id="watchTimeForm" action="{{ route('update.watchtime') }}" method="POST" style="display: none;">
        @csrf
        <input type="hidden" name="watchTime" id="watchTimeInput">
        <input type="hidden" name="classname" id="classnameInput">
        <button type="submit" id="updateWatchTimeBtn"></button>
    </form>

    <script>

        window.onload = function() {

            var backButton = document.getElementById('backButton');
            var watchTimeInput = document.getElementById('watchTimeInput');
            var classnameInput = document.getElementById('classnameInput');
            var updateWatchTimeBtn = document.getElementById('updateWatchTimeBtn');


            var videoFrame = document.getElementById('videoFrame');


            var watchTime = 0;


            setInterval(function() {

                if (!videoFrame.paused && !videoFrame.ended) {
                    watchTime++;
                }
            }, 1000);


            var classname = "{{ $classname }}";
            classnameInput.value = classname;


backButton.addEventListener('click', function(event) {
    /
    event.preventDefault();


    watchTimeInput.value = watchTime;


    fetch("{{ route('update.watchtime') }}", {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': "{{ csrf_token() }}"
        },
        body: JSON.stringify({
            watchTime: watchTime,
            classname: classname
        })
    })
    .then(response => {

        window.location.href = "{{ route('watch.courses') }}";
    })
    .catch(error => {
        console.error('Error:', error);
    });
});

        };
    </script>
@endsection
