@extends('layouts.app')

@section('content')
<div class="container">
    <h2>學生註冊</h2>
    <form action="{{ route('manager.registerStudent') }}" method="post">
        @csrf

        <div class="form-group">
            <label for="password">密碼:</label>
            <input type="password" class="form-control" name="password" required>
        </div>

        <div class="form-group">
            <label for="name">姓名:</label>
            <input type="text" class="form-control" name="name" required>
        </div>

        <div class="form-group">
            <label for="school">學校:</label>
            <input type="text" class="form-control" name="school" required>
        </div>

        <div class="form-group">
            <label for="grade">年級:</label>
            <input type="text" class="form-control" name="grade" required>
        </div>

        <div class="form-group">
            <label for="gmail">Gmail:</label>
            <input type="email" class="form-control" name="gmail" required>
        </div>

        <div class="form-group">
            <label for="stuaddress1">學生住址 1:</label>
            <input type="text" class="form-control" name="stuaddress1" required>
        </div>

        <div class="form-group">
            <label for="stuaddress2">學生住址 2:</label>
            <input type="text" class="form-control" name="stuaddress2">
        </div>



        <div class="form-group">
            <label for="parname">家長姓名:</label>
            <input type="text" class="form-control" name="parname" required>
        </div>



        <div class="form-group">
            <label for="parnumber">家長電話:</label>
            <input type="text" class="form-control" name="parnumber" required>
        </div>

        <div class="form-group">
            <label for="Howtoknow">如何知道補習班:</label>
            <input type="text" class="form-control" name="Howtoknow" required>
        </div>

        <button type="submit" class="btn btn-primary">註冊</button>
    </form>
</div>
@endsection
