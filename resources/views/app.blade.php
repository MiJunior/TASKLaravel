<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <title>@yield('title')</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" >TaskLaravel</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="{{route('posts')}}">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('post.create')}}">Create</a>
            </li>
        </ul>
    </div>
    <form class="form-inline">
        <input class="form-control mr-sm-2" name="title" type="search" placeholder="Search title" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
</nav>
<div class="container">
    @yield('content')
</div>

<script src="{{ mix('js/app.js') }}"></script>
</body>
</html>
