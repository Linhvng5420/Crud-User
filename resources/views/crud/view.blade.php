@extends('dashboard')

@section('content')
<main>
    <div class="container">
        <h1>Thông tin người dùng</h1>

        <div style="text-align: center;">
            <!-- Hien thi anh neu user da cap nhat avata -->
            @if($user->profile_image)
            <div class="form-group">
                <img src="{{ $user->profile_image }}" alt="Profile Image" style="width: 100px; height: 100px; object-fit: cover; border-radius: 50%;">
            </div>
            @endif
        </div>

        <form action="">
            <div class="form-group">
                <h3 for="username">UserName: {{ $user->username }}</h3>
            </div>

            <div class="form-group">
                <h3 for="email">Email: {{ $user->email }}</h3>
            </div>
        </form>
    </div>
</main>

<style>
    body {
        font-family: sans-serif;
        margin: 0;
        padding: 0;
    }

    .container {
        width: 500px;
        height: auto;
        margin: 30px auto;
        padding: 20px;
        border: 1px solid #ccc;
    }

    h1 {
        text-align: center;
        margin-bottom: 30px;
        margin-top: -10px;
    }

    .form-group {
        margin-bottom: 15px;
    }

    label {
        display: block;
        margin-bottom: 5px;
    }

    input {
        width: 100%;
        padding: 10px;
        border: 1px solid #ccc;
        box-sizing: border-box;
    }

    button {
        background-color: #4CAF50;
        color: white;
        padding: 10px 20px;
        border: none;
        cursor: pointer;
        margin-left: 386px;
        margin-bottom: -500px;

    }

    button:hover {
        background-color: #45a049;
    }
</style>
@endsection