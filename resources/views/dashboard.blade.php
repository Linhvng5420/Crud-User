<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    body {
      font-family: Arial, sans-serif;
    }

    .navbar {
      display: flex;
      justify-content: center;
      padding: 5px 0;
      margin: 0 5%;
      border: 1px solid black;
    }

    .navbar a {
      color: black;
      text-decoration: none;
      padding: 10px 20px;
    }

    .navbar a:hover {
      background-color: #ddd;
      color: black;
    }

    footer {
      display: grid;
      margin: 1% 5%;
      padding: 1%;
      border: 1px solid black;
      justify-items: center;
    }
  </style>
</head>

<body>

  <nav class="navbar">
    @if (!Auth::check())
    <a href="{{ route('login') }}">Đăng Nhập</a>
    <a href="{{ route('signup') }}">Đăng Ký</a>
    @endif

    @if (Auth::check())
    <a href="{{ route('listUser') }}">List User</a>
    @endif

    <a href="#" onclick="document.getElementById('logout-form').submit();">Đăng Xuất</a>
  </nav>

  <div class="content-yield">
    @yield('content')
    @yield('content_update')
  </div>

  <footer><strong>Team D</strong></footer>

  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
    @csrf
  </form>

</body>
</html>