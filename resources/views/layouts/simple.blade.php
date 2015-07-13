<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'User Management System')</title>

    <link rel="stylesheet" href="{{ elixir('css/all.css') }}">

    @yield('header')

</head>
<body>

@yield('content')

<script src="{{ elixir('js/all.js') }}"></script>

@yield('footer')

</body>
</html>