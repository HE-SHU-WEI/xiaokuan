@extends('layouts.app')

@section('content')
    <h2>課程列表</h2>

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
                                <!-- 显示观看进度和时间信息 -->
                                <div class="progress">
                                    <p>課程進度：{{ $course['progressPercentage'] ?? '0' }}%</p>
                                </div>
                                {{-- <p>目前觀看時間：{{ $course['watchtime'] ?? '00:00:00' }}</p>
                                <p>課程總時長：{{ $course['videotime'] ?? '00:00:00' }}</p> --}}


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
@endsection
