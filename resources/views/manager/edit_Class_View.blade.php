@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>編輯課程</h2>
        <form method="POST" action="{{ route('updateClass', ['id' => $class->id]) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="classname">課程名稱</label>
                <input type="text" class="form-control" id="classname" name="classname" value="{{ $class->classname }}" required>
            </div>

            <div class="form-group">
                <label for="link">課程連結</label>
                <input type="text" class="form-control" id="link" name="link" value="{{ $class->link }}" required>
            </div>

            <div class="form-group">
                <label for="videotime">課程時長</label>
                <input type="text" class="form-control" id="videotime" name="videotime" value="{{ $class->videotime }}" required>
            </div>

            <div class="form-group">
                <label for="introduction">課程介紹</label>
                <textarea class="form-control" id="introduction" name="introduction" rows="4" required>{{ $class->introduction }}</textarea>
            </div>

            <div class="form-group">
                <label for="know">要先知道</label>
                <textarea class="form-control" id="know" name="know" rows="4" required>{{ $class->know }}</textarea>
            </div>

            <div class="form-group">
                <label for="forwho">使用對象</label>
                <textarea class="form-control" id="forwho" name="forwho" rows="4" required>{{ $class->forwho }}</textarea>
            </div>

            <div class="form-group">
                <label for="photo">照片</label>
                <input type="file" class="form-control-file" id="photo" name="photo">
            </div>

            <div class="form-group">
                <label for="money">價格</label>
                <input type="number" class="form-control" id="money" name="money" value="{{ $class->money }}" required>
            </div>


            <button type="submit" class="btn btn-primary">更新資料</button>
        </form>
    </div>
@endsection
