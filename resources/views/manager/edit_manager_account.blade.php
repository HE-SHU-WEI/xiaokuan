{{-- resources/views/manager/edit_manager_account.blade.php --}}

@extends('layouts.app')

@section('content')
    <h2>Edit Manager Account</h2>

    <div>
        <h3>Current Information</h3>
        <p>Name: {{ $manager->name }}</p>
        <p>Account: {{ $manager->account }}</p>
        <p>Password: {{ $manager->password }}</p> {{-- 注意：展示密码通常是不安全的 --}}
    </div>

    <form action="{{ route('manager.updateManagerAccount') }}" method="post">
        @csrf
        @method('PUT')

        <label for="name">New Name:</label>
        <input type="text" name="name" value="{{ $manager->name }}" required><br>

        <label for="account">New Account:</label>
        <input type="text" name="account" value="{{ $manager->account }}" required><br>

        <label for="password">New Password:</label>
        <input type="password" name="password"><br>

        <button type="submit">Update Account</button>
    </form>
@endsection
