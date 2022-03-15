<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>@yield('title', 'Index')</title>
    <script defer src="{{ asset('js/app.js') }}"></script>
    <script src="https://kit.fontawesome.com/261ff6c1d4.js" crossorigin="anonymous"></script>
    @yield('head')
    {{-- <script src="{{ asset('js/index.js') }}"></script> --}}
</head>
<body>
    @include('layout.navbar')
    <main>
        @yield('content')
    </main>
</body>
</html>