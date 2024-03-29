<!-- resources/views/manager/show_students.blade.php -->

@extends('layouts.app')

@section('content')
    <h2>學生清單</h2>

    <table style="border-collapse: collapse; width: 100%;">
        <thead>
            <tr style="border: 1px solid #dddddd; text-align: left; padding: 8px;">
                <th style="border: 1px solid #dddddd; padding: 8px;">學號</th>
                <th style="border: 1px solid #dddddd; padding: 8px;">姓名</th>
                <th style="border: 1px solid #dddddd; padding: 8px;">學校</th>
                <th style="border: 1px solid #dddddd; padding: 8px;">年級</th>
                <th style="border: 1px solid #dddddd; padding: 8px;">Email</th>
                <th style="border: 1px solid #dddddd; padding: 8px;">地址1</th>
                <th style="border: 1px solid #dddddd; padding: 8px;">地址2</th>
                <th style="border: 1px solid #dddddd; padding: 8px;">地址3</th>
                <th style="border: 1px solid #dddddd; padding: 8px;">家長姓名</th>
                <th style="border: 1px solid #dddddd; padding: 8px;">家長Email</th>
                <th style="border: 1px solid #dddddd; padding: 8px;">家長電話</th>
                <th style="border: 1px solid #dddddd; padding: 8px;">如何得知</th>
                <th style="border: 1px solid #dddddd; padding: 8px;">操作</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($students as $student)
                <tr style="border: 1px solid #dddddd; text-align: left; padding: 8px;">
                    <td style="border: 1px solid #dddddd; padding: 8px;">{{ $student->account }}</td>
                    <td style="border: 1px solid #dddddd; padding: 8px;">{{ $student->name }}</td>
                    <td style="border: 1px solid #dddddd; padding: 8px;">{{ $student->school }}</td>
                    <td style="border: 1px solid #dddddd; padding: 8px;">{{ $student->grade }}</td>
                    <td style="border: 1px solid #dddddd; padding: 8px;">{{ $student->gmail }}</td>
                    <td style="border: 1px solid #dddddd; padding: 8px;">{{ $student->stuaddress1 }}</td>
                    <td style="border: 1px solid #dddddd; padding: 8px;">{{ $student->stuaddress2 }}</td>
                    <td style="border: 1px solid #dddddd; padding: 8px;">{{ $student->stuaddress3 }}</td>
                    <td style="border: 1px solid #dddddd; padding: 8px;">{{ $student->parname }}</td>
                    <td style="border: 1px solid #dddddd; padding: 8px;">{{ $student->pargmail }}</td>
                    <td style="border: 1px solid #dddddd; padding: 8px;">{{ $student->parnumber }}</td>
                    <td style="border: 1px solid #dddddd; padding: 8px;">{{ $student->Howtoknow }}</td>
                    <td style="border: 1px solid #dddddd; padding: 8px;">
                        <form action="{{ route('deleteStudent', $student->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit">刪除</button>
                        </form>
                        <form action="{{ route('queryStudent') }}" method="POST">
                            @csrf
                            <input type="hidden" name="student_account" value="{{ $student->account }}">
                            <button type="submit">查詢</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
