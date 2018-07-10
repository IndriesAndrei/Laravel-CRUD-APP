<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!--  getting Bootstrap in -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="bg-info text-white p-2">
            <a href="{{ route('posts.index') }}" class="btn btn-secondary">Home</a>
            <a href="{{ route('posts.create') }}" class="btn btn-secondary">Create Post</a>

            {{--  // if the user is logged in, we show the logout button  --}}
           @auth
                <form class="d-inline-block float-right" action="{{ route('logout') }}" method="post">
                @csrf
                <button class="btn btn-secondary">User: {{ auth()->user()->name }} | Logout</button>
                </form>
            @else
                <a href="{{ route('login') }}" class="btn btn-secondary">Login</a>
        @yield('content')
        @endauth

        </div>
        @yield('content')
    </div>

    <div class="bg-dark text-white p-2 text-center">
        All rights reserved &copy; Andrei Indries  {{ date('Y') }}
    </div>
</body>
</html>
