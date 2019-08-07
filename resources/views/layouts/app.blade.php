<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css')}}">

    </head>
    <body>
            <div class="app">
                @yield('content')
                <h1>Hola, Tu</h1>
            </div>

        
        <!-- Js & Others -->
        <script src="{{ asset('js/app.js')}}"></script>
    </body>
</html>
