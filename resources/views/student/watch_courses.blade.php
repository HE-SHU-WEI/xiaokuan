@extends('layouts.app')

@section('content')
    <h2>观看课程</h2>

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
                                    <p>观看进度：{{ $course['progressPercentage'] ?? '0' }}%</p>
                                </div>
                                <p>观看时间：{{ $course['watchtime'] ?? '00:00:00' }}</p>
                                <p>视频总时长：{{ $course['videotime'] ?? '00:00:00' }}</p>


                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p>您没有购买任何课程</p>
    @endif

    <a href="{{ route('student.index') }}" id="backButton" class="btn btn-primary">回前页</a>
@endsection
