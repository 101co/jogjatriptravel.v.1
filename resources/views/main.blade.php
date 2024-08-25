<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
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
        {{-- start of navbar --}}
        <nav class="pt-4 px-4">
            <div class="fixed top-0 right-0 left-0 p-4 bg-slate-50 z-50 shadow-md">
                <div class="flex items-center justify-between">
                    <div class="flex flex-col">
                        <span class="ms-2 text-base font-bold">Jogja <span class="font-normal">Trip Travel</span></span>
                    </div>
                    <div class="hidden lg:block">
                        <ul class="flex justify-between gap-4">
                            <li>
                                <a href="#" class="font-light text-base hover:bg-slate-100 px-3 py-2 rounded-full duration-1000 ease-in-out">Beranda</a>
                            </li>
                            <li>
                                <a href="#katalog-wisata" class="font-light text-base hover:bg-slate-100 px-3 py-2 rounded-full duration-1000 ease-in-out">Katalog Wisata</a>
                            </li>
                            <li>
                                <a href="#" class="font-light text-base hover:bg-slate-100 px-3 py-2 rounded-full duration-1000 ease-in-out">Tentang Kami</a>
                            </li>
                            <li>
                                <a href="#" class="font-light text-base hover:bg-slate-100 px-3 py-2 rounded-full duration-1000 ease-in-out">Blog</a>
                            </li>
                            <li>
                                <a href="#" class="font-light text-base hover:bg-slate-100 px-3 py-2 rounded-full duration-1000 ease-in-out">FAQ</a>
                            </li>
                        </ul>
                    </div>
                    <ion-icon class="cursor-pointer text-lg" name="list"></ion-icon>
                </div>
            </div>
            <div class="fixed bottom-0 right-0 left-0 md:hidden z-50">
                <ul class="flex justify-between px-5 pt-3 pb-4 border-t-2 border-teal-100 bg-slate-50">
                    <li>
                        <a href="#" class="flex justify-center flex-col items-center gap-1 text-slate-400 hover:text-slate-800 duration-700">
                            <ion-icon name="home" class="text-lg mb-1"></ion-icon>
                            <span class="text-xs font-normal">Beranda</span>
                        </a>
                    </li>
                    <li>
                        <a href="#katalog-wisata" class="flex justify-center flex-col items-center gap-1 text-slate-400 hover:text-slate-800 duration-700">
                            <ion-icon name="map" class="text-lg mb-1"></ion-icon>
                            <span class="text-xs font-normal">Katalog Wisata</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="flex justify-center flex-col items-center gap-1 text-slate-400 hover:text-slate-800 duration-700">
                            <ion-icon name="paper" class="text-lg mb-1"></ion-icon>
                            <span class="text-xs font-normal">Blog</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="flex justify-center flex-col items-center gap-1 text-slate-400 hover:text-slate-800 duration-700">
                            <ion-icon name="call" class="text-lg mb-1"></ion-icon>
                            <span class="text-xs font-normal">Kontak</span>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
        {{-- end of navbar --}}

        {{-- start of hero --}}
        <section class="mt-12">
            <div>
                <img class="w-full h-1/2 lg:h-[41rem] px-2 py-2 rounded-3xl object-cover" src="{{ asset('/storage/images/hero/jogja-3.jpg') }}" alt="image">
            </div>
        </section>
        {{-- end of hero --}}

        <section class="px-auto lg:px-32">
            {{-- start of service (top values) --}}
            <div class="flex flex-col text-center py-20 gap-y-4">
                <h1 class="mx-auto text-2xl lg:text-4xl font-semibold">Top values for you</h1>
                <span class="text-xs lg:text-sm text-slate-500">Nikmati keindahaan dunia bersama kami.</span>
                <div class="py-6 flex flex-col lg:flex-row mx-auto gap-y-12 lg:gap-x-24">
                    <div class="flex flex-col gap-y-2 w-52 cursor-pointer">
                        <span><ion-icon class="lg:text-3xl bg-slate-200 p-4 rounded-full hover:bg-slate-300" name="airplane"></ion-icon></span>
                        <span class="font-semibold">Airport pickup</span>
                        <span class="text-sm text-slate-500">We provide service to pickup at the airport for you</span>
                    </div>
                    <div class="flex flex-col gap-y-2 w-52 cursor-pointer">
                        <span><ion-icon class="text-3xl bg-slate-200 p-4 rounded-full hover:bg-slate-300" name="wallet"></ion-icon></span>
                        <span class="font-semibold">Easy Booking</span>
                        <span class="text-sm text-slate-500">Just chat with us and everything would be simple</span>
                    </div>
                    <div class="flex flex-col gap-y-2 w-52 cursor-pointer">
                        <span><ion-icon class="text-3xl bg-slate-200 p-4 rounded-full hover:bg-slate-300" name="contacts"></ion-icon></span>
                        <span class="font-semibold">Best Tour Guide</span>
                        <span class="text-sm text-slate-500">Meet out talented tour guide and explore the journey</span>
                    </div>
                    <div class="flex flex-col gap-y-2 w-52 cursor-pointer">
                        <span><ion-icon class="text-3xl bg-slate-200 p-4 rounded-full hover:bg-slate-300" name="pricetags"></ion-icon></span>
                        <span class="font-semibold">Lots of promos</span>
                        <span class="text-sm text-slate-500">Save you money and enjoy your trip</span>
                    </div>
                </div>
            </div>
            {{-- end of service (top values) --}}

            {{-- start of travel catalog --}}
            <div id="katalog-wisata" class="flex flex-col pt-20 pb-24 gap-y-4">
                <h1 class="mx-auto lg:mx-0 text-2xl lg:text-4xl font-semibold">Choose your tour</h1>
                <div class="flex flex-col lg:flex-row mx-auto pt-8 px-10 lg:px-0 gap-y-10 lg:gap-x-8 justify-between">
                    <div class="border border-slate-300 bg-white h-96 w-full lg:w-72 rounded-2xl hover:scale-105 duration-700 cursor-pointer">
                        <img class="w-full h-3/4 rounded-2xl object-cover" src="{{ asset('/storage/images/hero/jogja-1.jpg') }}" alt="image">
                        <div class="flex flex-row mx-4 my-4 gap-y-2">
                            <div class="flex flex-col gap-y-2">
                                <h1 class="font-bold text-lg">Yogyakarta City</h1>
                                <ul class="flex flex-row gap-x-4 text-xs font-light text-slate-400 items-center">
                                    <li class="flex items-center gap-1"><ion-icon name="bed"></ion-icon><span>Hotel</span></li>
                                    <li class="flex items-center gap-1"><ion-icon name="time"></ion-icon><span>2 days</span></li>
                                    <li class="flex items-center gap-1"><ion-icon name="journal"></ion-icon><span>Ticket</span></li>
                                </ul>
                            </div>
                            <div class="ml-auto flex items-end">
                                <span class="flex items-center bg-slate-200 rounded-full p-2 hover:bg-slate-300 hover:scale-105 duration-700 ease-in-out"><ion-icon name="arrow-forward"></ion-icon></span>
                            </div>
                        </div>
                    </div>
                    <div class="border border-slate-300 bg-white h-96 w-full lg:w-72 rounded-2xl hover:scale-105 duration-700 cursor-pointer">
                        <img class="w-full h-3/4 rounded-2xl object-cover" src="{{ asset('/storage/images/hero/jogja-2.jpg') }}" alt="image">
                        <div class="flex flex-row mx-4 my-4 gap-y-2">
                            <div class="flex flex-col gap-y-2">
                                <h1 class="font-bold text-lg">History Tour</h1>
                                <ul class="flex flex-row gap-x-4 text-xs font-light text-slate-400 items-center">
                                    <li class="flex items-center gap-1"><ion-icon name="bed"></ion-icon><span>No hotel</span></li>
                                    <li class="flex items-center gap-1"><ion-icon name="time"></ion-icon><span>1 day</span></li>
                                    <li class="flex items-center gap-1"><ion-icon name="journal"></ion-icon><span>Ticket</span></li>
                                </ul>
                            </div>
                            <div class="ml-auto flex items-end">
                                <span class="flex items-center bg-slate-200 rounded-full p-2 hover:bg-slate-300 hover:scale-105 duration-700 ease-in-out"><ion-icon name="arrow-forward"></ion-icon></span>
                            </div>
                        </div>
                    </div>
                    <div class="border border-slate-300 bg-white h-96 w-full lg:w-72 rounded-2xl hover:scale-105 duration-700 cursor-pointer">
                        <img class="w-full h-3/4 rounded-2xl object-cover" src="{{ asset('/storage/images/hero/jogja-3.jpg') }}" alt="image">
                        <div class="flex flex-row mx-4 my-4 gap-y-2">
                            <div class="flex flex-col gap-y-2">
                                <h1 class="font-bold text-lg">Transportation</h1>
                                <ul class="flex flex-row gap-x-4 text-xs font-light text-slate-400 items-center">
                                    <li class="flex items-center gap-1"><ion-icon name="bed"></ion-icon><span>No hotel</span></li>
                                    <li class="flex items-center gap-1"><ion-icon name="time"></ion-icon><span>1 day</span></li>
                                    <li class="flex items-center gap-1"><ion-icon name="journal"></ion-icon><span>Ticket</span></li>
                                </ul>
                            </div>
                            <div class="ml-auto flex items-end">
                                <span class="flex items-center bg-slate-200 rounded-full p-2 hover:bg-slate-300 hover:scale-105 duration-700 ease-in-out"><ion-icon name="arrow-forward"></ion-icon></span>
                            </div>
                        </div>
                    </div>
                    <div class="border border-slate-300 bg-white h-96 w-full lg:w-72 rounded-2xl hover:scale-105 duration-700 cursor-pointer">
                        <img class="w-full h-3/4 rounded-2xl object-cover" src="{{ asset('/storage/images/hero/jogja-4.jpg') }}" alt="image">
                        <div class="flex flex-row mx-4 my-4 gap-y-2">
                            <div class="flex flex-col gap-y-2">
                                <h1 class="font-bold text-lg">Lava Tour</h1>
                                <ul class="flex flex-row gap-x-4 text-xs font-light text-slate-400 items-center">
                                    <li class="flex items-center gap-1"><ion-icon name="bed"></ion-icon><span>No hotel</span></li>
                                    <li class="flex items-center gap-1"><ion-icon name="time"></ion-icon><span>1 day</span></li>
                                    <li class="flex items-center gap-1"><ion-icon name="journal"></ion-icon><span>Ticket</span></li>
                                </ul>
                            </div>
                            <div class="ml-auto flex items-end">
                                <span class="flex items-center bg-slate-200 rounded-full p-2 hover:bg-slate-300 hover:scale-105 duration-700 ease-in-out"><ion-icon name="arrow-forward"></ion-icon></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mx-auto pt-10">
                    <span class="rounded-full border px-5 py-2 font-semibold text-sm cursor-pointer hover:bg-slate-800 hover:text-slate-100 hover:border-transparent">See all</span>
                </div>
            </div>
            {{-- end of travel catalog --}}
        </section>

        {{-- start of hero --}}
        <div class="relative text-center">
            <img class="grayscale w-full h-[20rem] object-cover" src="{{ asset('/storage/images/hero/jogja-2.jpg') }}" alt="img"/>
            <div class="w-full flex flex-col items-center absolute top-0 left-0 gap-y-10 py-24 content-center">
                <h2 class="text-4xl font-semibold text-white text-center">
                   Enjoy your trip!
                </h2>
                <button class="border-white text-sm border rounded-2xl text-white font-bold py-2 px-4 hover:bg-slate-50 hover:text-slate-700">
                    More travel info
                </button>
            </div>
        </div>
        {{-- end of hero --}}

        {{-- start of button whatsapp --}}
        <div class="fixed bottom-0 right-0 mr-6 mb-24 lg:mb-6">
            <span class="flex text-2xl lg:text-3xl p-4 rounded-full bg-slate-100 shadow-md cursor-pointer hover:scale-90 hover:bg-slate-300 duration-500"><ion-icon name="logo-whatsapp"></ion-icon></span>
        </div>
        {{-- end of button whatsapp --}}
    </body>
</html>
