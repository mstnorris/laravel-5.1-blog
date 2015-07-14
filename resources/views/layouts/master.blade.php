<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'User Management System')</title>

    <link rel="stylesheet" href="{{ elixir('css/all.css') }}">

    @yield('header')

</head>
<body>

@include('layouts.partials._header')

@include('layouts.partials._navigation')

@yield('content')

@include('layouts.partials._footer')

<script src="{{ elixir('js/all.js') }}"></script>

@include('layouts.partials.alert')

@yield('footer')

</body>
</html>