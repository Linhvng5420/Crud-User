@extends('dashboard')

@section('content')

<section class="login-form">
    <div class="card-login">
        <div class="card-title">
            <h1>Màn hình đăng nhập</h1>
        </div>
        <form method="POST" action="{{ route('user.authUser') }}" class="card-body">
            @csrf
            <div class="input-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" required autofocus>
            </div>
            <div class="input-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
            </div>
            <div class="remember-forgot">
                <label class="checkbox-label">
                    <input type="checkbox" name="remember"><span>Ghi nhớ đăng nhập</span>
                </label>
                <a href="#" class="forgot-password">Quên mật khẩu?</a>
            </div>
            <button type="submit" class="btn-login">Đăng nhập</button>
        </form>
    </div>
</section>


<style>
    .login-form {
        width: 100%;
        max-width: 400px;
        margin: auto;
    }

    .card-login {
        border: 1px solid #ccc;
        padding: 20px;
        margin-top: 50px;
    }

    .card-title h1 {
        text-align: center;
        margin-bottom: 20px;
    }

    .input-group {
        margin-bottom: 15px;
    }

    .input-group label {
        display: block;
        margin-bottom: 5px;
    }

    .input-group input[type="text"],
    .input-group input[type="password"] {
        width: 90%;
        padding: 10px;
        border: 1px solid #ccc;
    }

    .remember-forgot {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 15px;
    }

    .remember-forgot .checkbox-label {
        display: flex;
        align-items: center;
    }

    .remember-forgot .checkbox-label input[type="checkbox"] {
        margin-right: 5px;
    }

    .remember-forgot .forgot-password {
        color: blue;
        text-decoration: none;
    }

    .btn-login {
        width: 100%;
        padding: 10px;
        background-color: blue;
        color: white;
        border: none;
        cursor: pointer;
    }
</style>
@endsection