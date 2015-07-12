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

<div class="container">
    <div class="page-header">
        <h1>Sticky footer with fixed navbar</h1>
    </div>
    <p class="lead">Pin a fixed-height footer to the bottom of the viewport in desktop browsers with this custom HTML and CSS. A fixed navbar has been added with <code>padding-top: 60px;</code> on the <code>body > .container</code>.</p>
    <p>Back to <a href="../sticky-footer">the default sticky footer</a> minus the navbar.</p>
</div>

@yield('content')

@include('layouts.partials._footer')

<script src="{{ elixir('js/all.js') }}"></script>

@yield('footer')

</body>
</html>