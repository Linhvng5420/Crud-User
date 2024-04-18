@extends('dashboard')

@section('content')
<style>
    .home {
        display: flex;
        justify-content: center;
        align-items: center;
        gap: 10px;
        margin: 10px 0px;
    }

    .card {
        border: 1px solid #ccc;
        padding: 10%;
    }


    .Sidebar {
        padding: 10% 5%;
    }

    .Text {
        padding: 10% 35%;
    }
</style>

<section>
    <div class="home">
        <div class="card Sidebar">Sidebar</div>
        <div class="card Text">Text</div>
    </div>
</section>

@endsection