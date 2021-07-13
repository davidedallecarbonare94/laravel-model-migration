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
        <h1>Flights</h1>
        <nav>
            <a href="{{ route('index') }}">Home</a>
            <a href="{{ route('contacts') }}">Contacts</a>
            <a href="{{ route('about') }}">About</a>
        </nav>
        
    </body>
</html>
