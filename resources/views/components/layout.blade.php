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
        <link 
            rel="stylesheet" 
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" 
            crossorigin="anonymous" 
            referrerpolicy="no-referrer" 
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
