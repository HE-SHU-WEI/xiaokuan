@extends('layouts.app')

@section('content')
    <h2>觀看課程</h2>

    <iframe id="videoFrame" width="560" height="315" src="{{ $link }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>

    <a href="javascript:void(0)" id="backButton" class="btn btn-primary">回前頁</a>

    <form id="watchTimeForm" action="{{ route('update.watchtime') }}" method="POST" style="display: none;">
        @csrf
        <input type="hidden" name="watchTime" id="watchTimeInput">
        <input type="hidden" name="classname" id="classnameInput">
        <button type="submit" id="updateWatchTimeBtn"></button>
    </form>

    <script>
        // 页面加载完成后执行
        window.onload = function() {
            // 获取回前页的按钮
            var backButton = document.getElementById('backButton');
            var watchTimeInput = document.getElementById('watchTimeInput');
            var classnameInput = document.getElementById('classnameInput');
            var updateWatchTimeBtn = document.getElementById('updateWatchTimeBtn');

            // 获取视频框架元素
            var videoFrame = document.getElementById('videoFrame');

            // 设置初始观看时间为0
            var watchTime = 0;

            // 每1秒更新观看时间
            setInterval(function() {
                // 如果视频正在播放，则增加观看时间
                if (!videoFrame.paused && !videoFrame.ended) {
                    watchTime++;
                }
            }, 1000);

            // 获取当前课程名称
            var classname = "{{ $classname }}";
            classnameInput.value = classname;

            // 为回前页的按钮添加点击事件监听器
            // 为回前页的按钮添加点击事件监听器
backButton.addEventListener('click', function(event) {
    // 阻止默认行为，即不执行页面重定向
    event.preventDefault();

    // 将观看时间和课程名称发送到后端
    watchTimeInput.value = watchTime;

    // 使用 AJAX 请求发送数据到后端
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
        // 请求成功后执行页面重定向
        window.location.href = "{{ route('watch.courses') }}";
    })
    .catch(error => {
        console.error('Error:', error);
    });
});

        };
    </script>
@endsection
