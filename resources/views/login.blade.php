<!-- login.blade.php -->

<form method="post" action="{{ route('login') }}">
    @csrf

    <label for="account">帳號:</label>
    <!-- 如果 Session 中存在 remembered_account，將其預填入表單 -->
    <input type="text" name="account" id="account" value="{{ old('account', $rememberedAccount ?? '') }}" required>

    <label for="password">密碼:</label>
    <input type="password" name="password" id="password" required>

    <button type="submit">登入</button>
</form>

<a href="{{ route('password.request') }}">忘記密碼？</a>

@if(session('error'))
    <div>{{ session('error') }}</div>
@endif

{{-- 檢查是否有要導向的先前頁面 --}}
@if(session('redirectClass'))
    <script>
        window.location.href = "{{ session('redirectClass') }}";
    </script>
@endif
