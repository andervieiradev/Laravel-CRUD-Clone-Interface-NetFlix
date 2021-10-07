<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    @yield('css')
    <link href="{{ asset('css/browse.css') }}" rel="stylesheet">
</head>
<body >
    @yield('content')

<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>
<script src="https://kit.fontawesome.com/9cba7bf665.js"></script>
@yield('js')
</body>
</html>
