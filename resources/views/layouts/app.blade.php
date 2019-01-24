<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- CSRF-Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link rel="stylesheet" href="//img.eeyes.net/eeyes_common/css/eeyes_common.css">

    <title>@yield('title')-e瞳创意工坊</title>
</head>
<body>
    <div id="app">
        @include('layouts._header')
        <div class="container">
            @include('shared._messages')
            @yield('content')
        </div>
        @include('layouts._footer')
    </div>
    <script src="{{ mix('js/app.js') }}"></script>
</body>
</html>