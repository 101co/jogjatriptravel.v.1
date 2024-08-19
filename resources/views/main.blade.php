<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        
        @vite('resources/css/app.css')
    </head>
    <body>
        <div class="container min-h-screen px-28 py-5 ">
            <nav class="flex items-center">
                <img class="w-8 cursor-pointer" src="{{ asset('/storage/images/dummy-logo.png') }}" alt="logo">
                <ul class="flex-1 text-center">
                    <li class="list-none inline-block px-5"><a class="px-2" href="#">Home</a></li>
                    <li class="list-none inline-block px-5"><a class="px-2" href="#">About</a></li>
                    <li class="list-none inline-block px-5"><a class="px-2" href="#">Features</a></li>
                    <li class="list-none inline-block px-5"><a class="px-2" href="#">Contact</a></li>
                </ul>
            </nav>
        </div>
    </body>
</html>
