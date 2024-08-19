<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
        
        @vite('resources/css/app.css')
    </head>
    <body>
        <div class="container min-h-screen px-28 py-5 ">
            <nav class="flex items-center">
                <img class="w-8 cursor-pointer" src="{{ asset('/storage/images/dummy-logo.png') }}" alt="logo">
                <ul class="flex-1 text-center">
                    <li class="list-none inline-block px-5"><a class="px-2 font-medium" href="#">Home</a></li>
                    <li class="list-none inline-block px-5"><a class="px-2 font-medium" href="#">About</a></li>
                    <li class="list-none inline-block px-5"><a class="px-2 font-medium" href="#">Features</a></li>
                    <li class="list-none inline-block px-5"><a class="px-2 font-medium" href="#">Contact</a></li>
                </ul>
            </nav>

            <div class="mt-24 max-w-xl">
                <h1 class="text-5xl font-semibold">Jogja Trip Travel</h1>
                <h2 class="font-light text-3xl mt-5">Your Trip Solution!</h2>
                <p class="mt-3">Temukan berbagai pilihan wisata sesuai dengan keinginanmu dan wujudkan bersama kami!</p>

                <div class="mt-10">
                    <a href="#" class="bg-slate-800 rounded-3xl py-3 px-8 font-medium 
                    text-slate-100 inline-block mr-4 hover:bg-transparent
                    hover:border-slate-800 hover:text-slate-800 duration-300 hover:border border border-transparent">
                        Lihat Katalog
                    </a>
                    <a href="#" class="py-3 px-8 border border-slate-700 rounded-3xl hover:bg-lime-500 hover:border-transparent 
                        duration-300 hover:text-white">
                        Cek Jadwal
                    </a>
                </div>
            </div>
        </div>
    </body>
</html>
