@extends('dashboard')

@section('content')
<section class="user-list">
    <div class="container">
        <h2>Danh sách user</h2>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Thao tác</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                <tr>
                    <th>{{ $user->id }}</th>
                    <th>{{ $user->username }}</th>
                    <th>{{ $user->email }}</th>

                    <th>
                        <a href="{{ route('user.viewUser', ['id' => $user->id]) }}">View</a> |
                        <a href="#">Edit</a> |
                        <a href="#">Delete</a>
                    </th>
                </tr>
                @endforeach
            </tbody>
        </table>
        
        <div class="pagination">
            {!! $users->links() !!}
        </div>
    </div>
</section>

<style>
    body {
        font-family: sans-serif;
        margin: 0;
        padding: 0;
    }

    .user-list {
        padding: 20px;
        margin: 0 80px 0 80px;
    }

    .container {
        max-width: 1000px;
        margin: 0 auto;
    }

    h2 {
        text-align: center;
        margin-bottom: 20px;
    }

    table {
        width: 100%;
        border-collapse: collapse;
    }

    thead tr th {
        background-color: #f2f2f2;
        text-align: center;
    }

    th,
    td {
        padding: 10px;
        border: 1px solid #ddd;
        text-align: left;
    }

    th {
        background-color: white;
    }

    .pagination {
        display: flex;
        justify-content: center;
        margin-top: 20px;
    }

    .pagination a {
        color: #000;
        padding: 5px;
        text-decoration: none;
        border: 1px solid #ddd;
        margin: 5px;
    }

    .pagination a.active {
        background-color: #ddd;
    }

    .pagination svg {
        height: 15px;
        width: 30px;
    }
</style>

@endsection