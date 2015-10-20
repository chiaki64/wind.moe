<!-- resources/views/auth/login.blade.php -->

<form method="POST" action="/auth/login">
    {!! csrf_field() !!}

    <div>
        Email
        <input type="hidden" name="email" value="i@wind.moe">
    </div>

    <div>
        Password
        <input type="hidden" name="password" id="password" value="Zhangzenan">
    </div>

    <div>
        <input type="checkbox" name="remember"> Remember Me
    </div>

    <div>
        <button type="submit">Login</button>
    </div>
</form>