<form method="post" action="{{ route('password.email') }}">
    @csrf

    <label for="account">學號:</label>
    <input type="text" name="account" id="account" required>

    <label for="email">email:</label>
    <input type="email" name="email" id="email" required>

    <button type="submit">發送重設密碼鏈接</button>
</form>

@if(session('status'))
    <div>{{ session('status') }}</div>
@endif

@if($errors->any())
    <div>
        @foreach ($errors->all() as $error)
            <div>{{ $error }}</div>
        @endforeach
    </div>
@endif
