@extends('dashboard')

@section('content')
<main>
    <div class="container">
        <h1>Thông tin người dùng</h1>
        <form action="#">
            <div class="form-group">
                <h3 for="username">UserName: {{ $user->username }}</h3>
            </div>
            <div class="form-group">
                <h3 for="email">Email: {{ $user->email }}</h3>
            </div>
            <a href="#">
            <button type="submit">Chỉnh sửa</button>
            </a>
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
        height: 400px;
        margin: 30px auto;
        padding: 20px;
        border: 1px solid #ccc;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
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