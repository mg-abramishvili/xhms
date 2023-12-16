<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Home Media Server</title>

        @vite('resources/css/app.css')
    </head>
    <body>
        @auth
            <div id="app"></div>
        @endauth

        @guest
            @yield('content')
        @endguest

        @if(Route::currentRouteName() != 'login')
            @vite('resources/js/app.js')
        @endif
    </body>
</html>
