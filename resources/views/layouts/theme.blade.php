<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>@yield('title', '-')</title>
        <link rel="stylesheet" href="{{ mix('css/theme.css') }}">
    </head>
    <body class="@yield('body')">

        @yield('content')
        <script src="{{ mix('js/theme.js') }}"></script>
    </body>
</html>
