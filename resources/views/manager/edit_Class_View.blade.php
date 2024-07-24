@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>編輯課程</h2>
        <form method="POST" action="{{ route('updateClass', ['id' => $class->id]) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="classname">課程名稱</label>
                <input type="text" class="form-control" id="classname" name="classname" value="{{ $class->classname }}" >
            </div>

            <div class="form-group">
                <label for="classtype">課程種類</label>
                <input type="text" class="form-control" id="classtype" name="classtype" value="{{ $class->classtype }}" >
            </div>

            <div class="form-group">
                <label for="link">課程連結</label>
                <input type="text" class="form-control" id="link" name="link" value="{{ $class->link }}" >
            </div>

            <div class="form-group">
                <label for="videotime">課程時長</label>
                <input type="text" class="form-control" id="videotime" name="videotime" value="{{ $class->videotime }}" >
            </div>

            <div class="form-group">
                <label for="introduction">課程介紹</label>
                <input type="file" class="form-control-file" id="introduction" name="introduction">
                <img src="{{ asset('storage/' . $class->introduction) }}" alt="Introduction Image" style="max-width: 100px; max-height: 100px;">
            </div>



            <div class="form-group">
                <label for="forwho">使用對象</label>
                <textarea class="form-control" id="forwho" name="forwho" rows="4" >{{ $class->forwho }}</textarea>
            </div>

            <div class="form-group">
                <label for="photo">照片</label>
                <input type="file" class="form-control-file" id="photo" name="photo">
                @if($class->photo)
                    <img src="{{ asset('storage/' . $class->photo) }}" alt="Class Photo" style="max-width: 100px; max-height: 100px;">
                @endif
            </div>

            <div class="form-group">
                <label for="money">價格</label>
                <input type="text" class="form-control" id="money" name="money" value="{{ $class->money }}" >
            </div>

            <div class="form-group">
                <label for="discountlink">折扣出售</label>
                <textarea class="form-control" id="discountlink" name="discountlink" rows="4" >{{ $class->discountlink }}</textarea>
            </div>

            <div class="form-group">
                <label for="drive">雲端連結</label>
                <textarea class="form-control" id="drive" name="drive" rows="4" >{{ $class->drive }}</textarea>
            </div>

            <div class="form-group">
                <label for="classnum">課程包含數量</label>
                <textarea class="form-control" id="classnum" name="classnum" rows="4" >{{ $class->classnum }}</textarea>
            </div>

            <button type="submit" class="btn btn-primary">更新資料</button>
        </form>
    </div>
@endsection




