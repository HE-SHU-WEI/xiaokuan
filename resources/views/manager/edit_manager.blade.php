@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Edit Manager Account</h2>

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <div>
            <h3>Current Information</h3>
            <p><strong>Name:</strong> {{ $manager->name }}</p>
            <p><strong>Account:</strong> {{ $manager->account }}</p>
            <!-- 密码通常不显示 -->
        </div>

        <form action="{{ route('manager.updateManager') }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" name="name" value="{{ $manager->name }}" required>
            </div>

            <div class="form-group">
                <label for="account">Account:</label>
                <input type="text" class="form-control" name="account" value="{{ $manager->account }}" required>
            </div>

            <div class="form-group">
                <label for="password">Password :</label>
                <input type="password" class="form-control" name="password">
            </div>

            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection
