<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0">

        <title>Jogja Trip Travel | Sahabat Wisata Kamu</title>

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
        <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
        @vite('resources/css/app.css')
    </head>
    <body>
        {{-- navbar --}}
        <nav class="pt-6 px-4">
            <div class="container mx-auto border-b-2 border-teal-100">
                <div class="flex pb-4 items-center">
                    <img class="w-8" src="{{ asset('/storage/images/dummy-logo.png') }}" alt="logo">
                    <div class="flex flex-col">
                        <span class="ms-2 text-sm font-medium">JOGJA TRIP TRAVEL</span>
                        <span class="ms-2 text-xs font-extralight">Sahabat Wisata Kamu</span>
                    </div>
                    {{-- <ion-icon name="menu" class="text-xl"></ion-icon> --}}
                </div>
            </div>
            <div class="fixed bottom-0 right-0 left-0 md:hidden">
                <ul class="flex justify-between px-5 pt-3 pb-5 border-t-2 border-teal-100">
                    <li>
                        <a href="#" class="flex justify-center flex-col items-center gap-1 text-slate-800">
                            <ion-icon name="home" class="text-xl mb-1"></ion-icon>
                            <span class="text-sm font-normal">Beranda</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="flex justify-center flex-col items-center gap-1 text-slate-400">
                            <ion-icon name="map" class="text-xl mb-1"></ion-icon>
                            <span class="text-sm font-normal">Wisata</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="flex justify-center flex-col items-center gap-1 text-slate-400">
                            <ion-icon name="paper" class="text-xl mb-1"></ion-icon>
                            <span class="text-sm font-normal">Blog</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="flex justify-center flex-col items-center gap-1 text-slate-400">
                            <ion-icon name="call" class="text-xl mb-1"></ion-icon>
                            <span class="text-sm font-normal">Kontak</span>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
        {{-- navbar --}}

        <div class="text-center py-10">
            <h5 class="text-sm font-light uppercase">Testimoni</h5>
            <h1 class="w-56 mx-auto text-lg font-normal">Kata Mereka Tentang Jogja Trip Travel</h1>
        </div>
    </body>
</html>
