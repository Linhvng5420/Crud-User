@extends('dashboard')

@section('content')
    <section class="login-form">
        <div class="card-login">
            <div class="card-title">
                <h1>Màn hình đăng nhập</h1>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('user.authUser') }}">
                    <div class="input">
                        @csrf
                        <div class="email-login">
                            <label for="email">Email</label>
                            <input type="text" id="email" name="email" required autofocus class="user">
                            @if ($errors->has('email'))
                                <span class="text-danger">{{ $errors->first('email') }}</span>
                            @endif
                        </div>
                        <div class="password-login">
                            <label for="password">Mật khẩu</label>
                            <input type="password" id="password" name="password" class="pass" required>

                            @if ($errors->has('password'))
                                <span class="text-danger">{{ $errors->first('password') }}</span>
                            @endif
                        </div>
                    </div>

                    <input type="checkbox"><span>Ghi nhớ đăng nhập</span>
            </div>
            <div class="card-end">
                <a href="#">Tạo Tài Khoản Mới</a>
                <div>
                    <button type="submit" class="btn-login">Đăng nhập</button>
                </div>
            </div>
            </form>
        </div>
    </section>
@endsection
