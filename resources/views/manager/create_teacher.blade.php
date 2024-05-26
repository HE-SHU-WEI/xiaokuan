@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>新增教師</h2>
        <form action="{{ route('manager.storeTeacher') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="name">姓名：</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="輸入姓名">
            </div>
            <div class="form-group">
                <label for="account">帳號：</label>
                <input type="text" class="form-control" id="account" name="account" placeholder="輸入帳號">
            </div>
            <div class="form-group">
                <label for="password">密碼：</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="輸入密碼">
            </div>
            <div class="form-group">
                <label for="introduction">介紹：</label>
                <textarea class="form-control" id="introduction" name="introduction" rows="3" placeholder="輸入介紹"></textarea>
            </div>
            <div class="form-group">
                <label for="background">背景：</label>
                <textarea class="form-control" id="background" name="background" rows="3" placeholder="輸入背景"></textarea>
            </div>
            <div class="form-group">
                <label for="photo">照片：</label>
                <input type="file" class="form-control-file" id="photo" name="photo">
            </div>
            <div class="form-group">
                <label for="entry">進入時間：</label>
                <input type="date" class="form-control" id="entry" name="entry">
            </div>
            <button type="submit" class="btn btn-primary">提交</button>
        </form>
    </div>
@endsection
