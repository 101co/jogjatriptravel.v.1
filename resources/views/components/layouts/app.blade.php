<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
        <meta name="description" content="{{ $description ?? 'Jogja Trip Travel adalah penyedia jasa tour guide untuk wisata di kota Yogyakarta' }}">
        <meta name="keywords" content="jogja, trip, travel, jogja trip, trip jogja, travel jogja, jogja trip travel, trip travel jogja, travel trip jogja, wisata jogja, wisata yogyakarta">
        <meta name="author" content="Jogja Trip Travel">
        <meta name="robots" content="index, follow">
        <meta property="og:title" content="{{ $ogTitle ?? 'Jogja Trip Travel' }}">
        <meta property="og:description" content="{{ $ogDescription ?? 'Jogja Trip Travel adalah penyedia jasa tour guide untuk wisata di kota Yogyakarta' }}">
        <meta property="og:image" content="{{ asset('path/to/image.jpg') }}">
        <meta property="og:url" content="{{ url()->current() }}">

        <title>{{ $title ?? 'Jogja Trip Travel' }}</title>

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
        <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js" defer></script>
        @vite(['resources/css/app.css','resources/js/app.js'])
    </head>
    <body>    
        {{-- header --}}
        <header class="fixed flex items-center justify-between px-5 lg:px-[75px] py-5 z-50 top-0 right-0 left-0 bg-slate-50 shadow-md">
            <div class="mx-auto md:mx-0" aria-label="logo jogjatriptravel">
                <a href="{{ Request::path() == '/' ? '/' : '/' }}" class="text-base font-bold"><img src="{{ asset('/storage/images/logo/jogjatriptravel-1.svg') }}" alt="jogjatriptravel"></a>
            </div>
            <div class="hidden md:block">
                <ul class="flex justify-between gap-4">
                    <li>
                        <a href="{{ Request::path() == '/' ? '#' : '/' }}" aria-label="Home"
                            class="px-3 py-2 text-base font-light duration-1000 ease-in-out rounded-full hover:bg-slate-100">Home</a>
                    </li>
                    <li>
                        <a href="{{ Request::path() == '/' ? '#travel-catalogue' : '/#travel-catalogue' }}" aria-label="Travel Catalogue"
                            class="px-3 py-2 text-base font-light duration-1000 ease-in-out rounded-full hover:bg-slate-100">Catalogue
                            Wisata</a>
                    </li>
                    <li>
                        <a href="{{ Request::path() == '/' ? '#contact' : '/#contact' }}" aria-label="Contact Us"
                            class="px-3 py-2 text-base font-light duration-1000 ease-in-out rounded-full hover:bg-slate-100">Contact</a>
                    </li>
                    <li>
                        <a href="{{ Request::path() == '/' ? '#faq' : '/#faq' }}" aria-label="Frequently Asked Question"
                            class="px-3 py-2 text-base font-light duration-1000 ease-in-out rounded-full hover:bg-slate-100">FAQ</a>
                    </li>
                </ul>
            </div>
        </header>

        {{ $slot }}
        
        {{-- footer --}}
        <footer class="w-full bg-[#D8D8D8] mt-12 h-auto py-10 mb-16 md:mb-0">
            <ul class="flex flex-row justify-center text-sm text-center gap-x-5">
                <li><a href="https://www.instagram.com/jogja_trip_travel" target="_blank"><img src="{{ asset('/storage/images/icons/instagram.svg') }}" alt="Jogja Trip Travel Instagram"></a></li>
                <li><a href="https://www.facebook.com/Jogjatriptravel/" target="_blank"><img src="{{ asset('/storage/images/icons/facebook.svg') }}" alt="Jogja Trip Travel Facebook"></a></li>
                <li><a href="https://www.youtube.com/@jogjatriptravel442" target="_blank"><img src="{{ asset('/storage/images/icons/youtube.svg') }}" alt="Jogja Trip Travel Youtube"></a></li>
                <li><a href="https://x.com/jogjatriptravel" target="_blank"><img src="{{ asset('/storage/images/icons/twitter.svg') }}" alt="Jogja Trip Travel X (Twitter)"></a></li>
            </ul>
            <span class="flex justify-center mt-4 text-xs text-center opacity-65">Jogja Trip Travel &copy; {{ date('Y') }}</span>
        </footer>

        {{-- bottom navigation --}}
        <nav class="fixed bottom-0 left-0 right-0 shadow-2xl md:hidden shadow-black" aria-label="bottom navigation">
            <ul class="flex justify-between pt-3 pb-4 border-t-2 border-teal-100 px-7 bg-slate-50">
                <li>
                    <a href="{{ Request::path() == '/' ? '#' : '/' }}"
                        class="flex flex-col items-center justify-center gap-1 duration-700 text-slate-400 hover:text-slate-800">
                        <ion-icon name="home" class="mb-1 text-lg"></ion-icon>
                        <span class="text-xs font-normal">Home</span>
                    </a>
                </li>
                <li>
                    <a href="{{ Request::path() == '/' ? '#travel-catalogue' : '/#travel-catalogue' }}"
                        class="flex flex-col items-center justify-center gap-1 duration-700 text-slate-400 hover:text-slate-800">
                        <ion-icon name="map" class="mb-1 text-lg"></ion-icon>
                        <span class="text-xs font-normal">Catalogue</span>
                    </a>
                </li>
                <li>
                    <a href="{{ Request::path() == '/' ? '#contact' : '/#contact' }}"
                        class="flex flex-col items-center justify-center gap-1 duration-700 text-slate-400 hover:text-slate-800">
                        <ion-icon name="call" class="mb-1 text-lg"></ion-icon>
                        <span class="text-xs font-normal">Contact</span>
                    </a>
                </li>
                <li>
                    <a href="{{ Request::path() == '/' ? '#faq' : '/#faq' }}"
                        class="flex flex-col items-center justify-center gap-1 duration-700 text-slate-400 hover:text-slate-800">
                        <ion-icon name="help-circle-outline" class="mb-1 text-lg"></ion-icon>
                        <span class="text-xs font-normal">FAQ's</span>
                    </a>
                </li>
            </ul>
        </nav>

        {{-- start of button whatsapp --}}
        <div class="fixed bottom-0 right-0 mb-24 mr-6 md:mb-10 lg:mb-6">
            <a href="https://wa.me/6281226075920?text=Halo Jogja Trip Travel, saya tertarik dengan paket wisata yang ditawarkan." target="_blank" aria-label="chat with jogjatriptravel admin">
                <span class="flex p-4 text-2xl duration-500 rounded-full shadow-md cursor-pointer lg:text-3xl bg-slate-100 hover:scale-90 hover:bg-slate-300">
                    <ion-icon name="logo-whatsapp"></ion-icon>
                </span>
            </a>
        </div>
    </body>
</html>