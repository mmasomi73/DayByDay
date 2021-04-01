<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Calendar</title>

    <!-- Styles -->
{{--    <link href="{{ asset('css/tailwind.min.css') }}" rel="stylesheet">--}}
    <link href="{{ asset('css/app.css') }}?version={{config('app.version')}}" rel="stylesheet">
{{--    <link href="{{ asset('css/materialdesignicons.min.css') }}" rel="stylesheet">--}}
{{--    <link href="https://fonts.googleapis.com/css?family=Lalezar&display=swap" rel="stylesheet">--}}
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}?version={{config('app.version')}}" defer></script>
</head>
<body >
<div id='app'></div>
</body>
</html>
