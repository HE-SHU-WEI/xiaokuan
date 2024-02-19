@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>更新課程</h2>
        <form action="{{ route('storeCourse') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="form-group">
                <label for="classname">課程名稱:</label>
                <input type="text" class="form-control" name="classname" required>
            </div>

            <div class="form-group">
                <label for="classtype">課程折扣</label>
                <input type="text" class="form-control" name="classtype" required>
            </div>

            <!-- YouTube Link -->
            <div class="form-group">
                <label for="link">課程連結:</label>
                <input type="text" class="form-control" name="link" required>
            </div>

            <!-- Video Time -->
            <div class="form-group">
                <label for="videotime">影片時長 (hh:mm:ss):</label>
                <input type="text" class="form-control" name="videotime" placeholder="00:00:00" required>
            </div>

            <!-- Teacher Name -->
            <div class="form-group">
                <label for="teachername">老師:</label>
                <input type="text" class="form-control" name="teachername" required>
            </div>

            <!-- Introduction -->
            <div class="form-group">
                <label for="introduction">介紹:</label>
                <textarea class="form-control" name="introduction" rows="3" required></textarea>
            </div>

            <!-- Knowledge -->
            <div class="form-group">
                <label for="know">須知:</label>
                <input type="text" class="form-control" name="know" required>
            </div>

            <!-- For Who -->
            <div class="form-group">
                <label for="forwho">對象:</label>
                <input type="text" class="form-control" name="forwho" required>
            </div>

            <!-- Photo -->
            <div class="form-group">
                <label for="photo">圖片:</label>
                <input type="file" class="form-control-file" name="photo">
            </div>

            <!-- Money -->
            <div class="form-group">
                <label for="money">價格:</label>
                <input type="text" class="form-control" name="money" required>
            </div>

            <button type="submit" class="btn btn-primary">更新</button>
        </form>
    </div>
@endsection
