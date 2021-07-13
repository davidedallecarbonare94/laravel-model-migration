<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title', 'FirstPage')</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        
    </head>
    <body>
        <nav>
            <a href="{{ route('home') }}"></a>
            <a href="{{ route('contacts') }}"></a>
            <a href="{{ route('about') }}"></a>
        </nav>
        <h1>Flights</h1>
    </body>
</html>
