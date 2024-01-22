@extends('layouts.app')

@section('content')
    <h2>學生購課</h2>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <form method="post" action="{{ route('storeStudentPurchase') }}">
        @csrf
        <div class="form-group">
            <label for="classname">課程名稱:</label>
            <select name="classname" class="form-control">
                @foreach($classes as $class)
                    <option value="{{ $class }}">{{ $class }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="student_account">學生學號:</label>
            <input type="text" name="student_account" class="form-control" placeholder="請輸入學號">
        </div>
        <div class="form-group">
            <label for="student_name">學生名字:</label>
            <input type="text" name="student_name" class="form-control" placeholder="請輸入名字">
        </div>
        <div class="form-group">
            <label for="class_expire_date">課程到期日:</label>
            <input type="date" name="class_expire_date" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">新增</button>
    </form>
@endsection
