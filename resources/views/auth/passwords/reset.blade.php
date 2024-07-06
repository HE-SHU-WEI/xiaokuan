<form method="post" action="{{ route('password.update') }}">
    @csrf

    <input type="hidden" name="token" value="{{ $token }}">

    <label for="account">學號:</label>
    <input type="text" name="account" id="account" value="{{ $account ?? old('account') }}" required>

    <label for="password">新密碼:</label>
    <input type="password" name="password" id="password" required>

    <label for="password_confirmation">確認新密碼:</label>
    <input type="password" name="password_confirmation" id="password_confirmation" required>

    <button type="submit">重設密碼</button>
</form>

@if($errors->any())
    <div>
        @foreach ($errors->all() as $error)
            <div>{{ $error }}</div>
        @endforeach
    </div>
@endif
