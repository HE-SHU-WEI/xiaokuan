@extends('layouts.app')

@section('content')
    <h2>觀看課程</h2>

    @if(count($watchCourses) > 0)
        <table class="table">
            <tbody>
                @foreach($courseDetails as $index => $course)
                    <tr>
                        <td>
                            <div>
                                <a href="{{ route('watch.video', ['classname' => $course['classname']]) }}" target="_self">
                                    <img src="{{ asset('storage/' . $course['photo']) }}" style="max-width: 100px;">
                                </a>
                            </div>
                            <div>
                                <a href="{{ route('watch.video', ['classname' => $course['classname']]) }}" target="_self">
                                    {{ $course['classname'] }}
                                </a>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p>您沒有購買任何課程</p>
    @endif

    <a href="{{ route('student.index') }}" id="backButton" class="btn btn-primary">回前頁</a>

    <script>
        // 检查 URL 中是否包含参数
        var urlParams = new URLSearchParams(window.location.search);
        var updateSuccess = urlParams.get('updateSuccess');

        // 如果 URL 中包含更新成功的参数，则显示提示框
        if (updateSuccess === 'true') {
            window.prompt("观看时间已更新");
        } else if (updateSuccess === 'false') {
            window.prompt("更新失败");
        }

        // 页面加载完成后执行
        window.onload = function() {
            // 获取回前页的按钮
            var backButton = document.getElementById('backButton');

            // 为回前页的按钮添加点击事件监听器
            backButton.addEventListener('click', function(event) {
                // 点击按钮时，向 URL 添加参数，表示更新成功或失败
                var updatedUrl = "{{ route('student.index') }}" + "?updateSuccess=" + updateSuccess;
                // 重定向到更新成功的 URL
                window.location.href = updatedUrl;
            });
        };
    </script>
@endsection
