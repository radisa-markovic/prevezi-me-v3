<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Prevezi me v3</title>

        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <!-- Fonts -->
        <link 
            rel="preconnect" 
            href="https://fonts.bunny.net"
        />
        <link 
            href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" 
            rel="stylesheet" 
        />
    </head>
    <body>
        <header class="container main-header">
            @include('partials._navigation')    
        </header>
        <main class="container">
            {{$slot}} 
        </main>    

        <footer style="background-color: black;">
            <p style="text-transform:uppercase;font-weight:700;text-align:center;color:white">
                Futer
            </p>
        </footer>
    </body>
</html>
