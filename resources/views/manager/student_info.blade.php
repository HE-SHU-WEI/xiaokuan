<!-- resources/views/manager/student_info.blade.php -->

@extends('layouts.app')

@section('content')
    <h2>學生課程信息</h2>

    <table style="border-collapse: collapse; width: 100%;">
        <thead>
            <tr style="border: 1px solid #dddddd; text-align: left; padding: 8px;">
                <th style="border: 1px solid #dddddd; padding: 8px;">課程名稱</th>
                <th style="border: 1px solid #dddddd; padding: 8px;">已/未購買</th>
                <th style="border: 1px solid #dddddd; padding: 8px;">觀看時間</th>
                <th style="border: 1px solid #dddddd; padding: 8px;">總時長</th>
                <th style="border: 1px solid #dddddd; padding: 8px;">到期時間</th>
                <th style="border: 1px solid #dddddd; padding: 8px;">觀看百分比</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($studentData as $course)
                <tr style="border: 1px solid #dddddd; text-align: left; padding: 8px;">
                    <td style="border: 1px solid #dddddd; padding: 8px;">{{ $course->classname }}</td>
                    <td style="border: 1px solid #dddddd; padding: 8px;">{{ $course->classbuy }}</td>
                    <td style="border: 1px solid #dddddd; padding: 8px;">{{ $course->watchtime }}</td>
                    <td style="border: 1px solid #dddddd; padding: 8px;">{{ $course->videotime }}</td>
                    <td style="border: 1px solid #dddddd; padding: 8px;">
                        @if ($course->classend)
                            {{ $course->classend }}
                        @else
                            未購買
                        @endif
                    </td>
                    <td style="border: 1px solid #dddddd; padding: 8px;">
                        @php

                            $watchTime = \Carbon\Carbon::createFromFormat('H:i:s', $course->watchtime);
                            $videoTime = \Carbon\Carbon::createFromFormat('H:i:s', $course->videotime);

                            // 轉秒數
                            $totalWatchSeconds = $watchTime->hour * 3600 + $watchTime->minute * 60 + $watchTime->second;
                            $totalVideoSeconds = $videoTime->hour * 3600 + $videoTime->minute * 60 + $videoTime->second;

                            //算百分比
                            $percentage = ($totalWatchSeconds / $totalVideoSeconds) * 100;
                        @endphp


                        {{ round($percentage, 2) }}%

                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
