<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Laravel Bootstrapper</title>

    <link rel="stylesheet" href="{{ elixir('css/all.css') }}">

    @include('layouts.partials._header')

</head>
<body>

@include('layouts.partials._navigation')

@yield('content')

{{-- <script src="{{ elixir('js/app.js') }}"></script> --}}

@include('layouts.partials._footer')

</body>
</html>