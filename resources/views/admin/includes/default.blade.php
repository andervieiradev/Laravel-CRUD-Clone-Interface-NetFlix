<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name', 'Laravel') }}</title>

     <!-- Styles -->
     <link href="{{ asset('css/app.css') }}" rel="stylesheet">
     @yield('css')
</head>
<body >
    @yield('content')

<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>
<script src="https://kit.fontawesome.com/9cba7bf665.js"></script>
@yield('js')
</body>
</html>
