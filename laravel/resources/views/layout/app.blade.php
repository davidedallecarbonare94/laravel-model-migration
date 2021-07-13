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
        <div class="flights">
            @foreach($flights as $flight)
            <h2>{{$flight['company']}}</h2>
            <h3>Partenza da: {{$flight['departure']}}</h3>
            <h3>Arrivo a: {{$flight['arrival']}}</h3>
            <h3>Flight Code: {{$flight['flight_code']}}</h3>
            <h3>Numero passeggeri prenotati: {{$flight['attendants']}}</h3>
            <h3>Prezzo a persona: {{$flight['price']}}</h3>


            @endforeach
        </div>
    </body>
</html>
