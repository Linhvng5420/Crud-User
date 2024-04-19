@extends('dashboard')

@section('content')
<section class="update-form">
    <div class="card-update">
        <div class="card-title">
            <h1>Màn hình cập nhật</h1>
        </div>
        <form method="POST" action="{{ route('user.postUpdateUser', ['id' => $user->id]) }}" class="card-body">
            @csrf
            <div class="input-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" value="{{ $user->username }}" required autofocus>
            </div>

            <div class="input-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" value="{{ $user->email }}" required>
            </div>

            <div class="input-group">
                <label for="password">New Password</label>
                <input type="password" id="newpassword1" name="newpassword1" required>
            </div>

            <div class="input-group">
                <label for="password">New Password Again</label>
                <input type="password" id="newpassword2" name="newpassword2" required>
            </div>

            <div class="input-group">
                <label for="avata">Avatar</label>
                <input type="file" name="avata" id="avata" class="form-control">
                <img src="{{asset('images/'.$user->avata)}}" width="70px" height="70px" alt="Avatar.png">
            </div>

            <button type="submit" class="btn-update">Cập Nhật</button>
        </form>
    </div>
</section>

<style>
    .update-form {
        width: 100%;
        max-width: 400px;
        margin: auto;
    }

    .card-update {
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
    .input-group input[type="password"],
    .input-group input[type="email"] {
        width: 90%;
        padding: 10px;
        border: 1px solid #ccc;
    }

    .login {
        display: grid;
        justify-content: center;
        align-items: center;
        margin-top: 15px;
        color: blue;
        text-decoration: none;
    }

    .btn-update {
        width: 100%;
        padding: 10px;
        background-color: blue;
        color: white;
        border: none;
        cursor: pointer;
        font-size: x-large;
    }
</style>

@endsection