@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>上傳課程</h2>
        <form action="{{ route('storeCourse') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <!-- Classname -->
            <div class="form-group">
                <label for="classname">課程名稱:</label>
                <input type="text" class="form-control" name="classname" required>
            </div>

            <!-- Classtype -->
            <div class="form-group">
                <label for="classtype">課程種類:</label>
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
                <input type="file" class="form-control-file" name="introduction">
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

            <!-- Discount Link -->
            <div class="form-group">
                <label for="discountlink">折扣連結:</label>
                <input type="text" class="form-control" name="discountlink">
            </div>

            <!-- Drive -->
            <div class="form-group">
                <label for="drive">雲端連結:</label>
                <input type="text" class="form-control" name="drive">
            </div>

            <button type="submit" class="btn btn-primary">上傳</button>
        </form>
    </div>
@endsection
