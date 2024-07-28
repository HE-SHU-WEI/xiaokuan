@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>編輯管理員</h2>

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <div>
            <h3>目前的資訊</h3>
            <p><strong>名字:</strong> {{ $manager->name }}</p>
            <p><strong>帳號:</strong> {{ $manager->account }}</p>
        </div>

        <form action="{{ route('manager.updateManager') }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="name">名字:</label>
                <input type="text" class="form-control" name="name" value="{{ $manager->name }}" required>
            </div>

            <div class="form-group">
                <label for="account">帳號:</label>
                <input type="text" class="form-control" name="account" value="{{ $manager->account }}" required>
            </div>

            <div class="form-group">
                <label for="password">密碼:</label>
                <input type="password" class="form-control" name="password">
            </div>

            <button type="submit" class="btn btn-primary">更新</button>
        </form>
    </div>
@endsection
