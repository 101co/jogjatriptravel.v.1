<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">

        <title>{{ $title ?? 'Jogja Trip Travel | Sahabat Wisata Kamu' }}</title>

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
        <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
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
                            class="font-light text-base hover:bg-slate-100 px-3 py-2 rounded-full duration-1000 ease-in-out">Home</a>
                    </li>
                    <li>
                        <a href="{{ Request::path() == '/' ? '#travel-catalogue' : '/#travel-catalogue' }}" aria-label="Travel Catalogue"
                            class="font-light text-base hover:bg-slate-100 px-3 py-2 rounded-full duration-1000 ease-in-out">Catalogue
                            Wisata</a>
                    </li>
                    <li>
                        <a href="{{ Request::path() == '/' ? '#contact' : '/#contact' }}" aria-label="Contact Us"
                            class="font-light text-base hover:bg-slate-100 px-3 py-2 rounded-full duration-1000 ease-in-out">Contact</a>
                    </li>
                    <li>
                        <a href="{{ Request::path() == '/' ? '#faq' : '/#faq' }}" aria-label="Frequently Asked Question"
                            class="font-light text-base hover:bg-slate-100 px-3 py-2 rounded-full duration-1000 ease-in-out">FAQ</a>
                    </li>
                </ul>
            </div>
        </header>

        {{ $slot }}
        
        {{-- footer --}}
        <footer class="w-full bg-[#D8D8D8] mt-12 h-auto py-10 mb-16 md:mb-0">
            <ul class="flex flex-row text-center justify-center text-sm gap-x-5">
                <li><a href=""><img src="{{ asset('/storage/images/icons/instagram.svg') }}" alt=""></a></li>
                <li><a href=""><img src="{{ asset('/storage/images/icons/facebook.svg') }}" alt=""></a></li>
                <li><a href=""><img src="{{ asset('/storage/images/icons/youtube.svg') }}" alt=""></a></li>
                <li><a href=""><img src="{{ asset('/storage/images/icons/twitter.svg') }}" alt=""></a></li>
            </ul>
            <span class="flex text-center justify-center text-xs mt-4 opacity-65">Jogja Trip Travel &copy; {{ date('Y') }}</span>
        </footer>

        {{-- bottom navigation --}}
        <nav class="fixed bottom-0 right-0 left-0 md:hidden shadow-2xl shadow-black" aria-label="bottom navigation">
            <ul class="flex justify-between px-7 pt-3 pb-4 border-t-2 border-teal-100 bg-slate-50">
                <li>
                    <a href="{{ Request::path() == '/' ? '#' : '/' }}"
                        class="flex justify-center flex-col items-center gap-1 text-slate-400 hover:text-slate-800 duration-700">
                        <ion-icon name="home" class="text-lg mb-1"></ion-icon>
                        <span class="text-xs font-normal">Home</span>
                    </a>
                </li>
                <li>
                    <a href="{{ Request::path() == '/' ? '#travel-catalogue' : '/#travel-catalogue' }}"
                        class="flex justify-center flex-col items-center gap-1 text-slate-400 hover:text-slate-800 duration-700">
                        <ion-icon name="map" class="text-lg mb-1"></ion-icon>
                        <span class="text-xs font-normal">Catalogue</span>
                    </a>
                </li>
                <li>
                    <a href="{{ Request::path() == '/' ? '#contact' : '/#contact' }}"
                        class="flex justify-center flex-col items-center gap-1 text-slate-400 hover:text-slate-800 duration-700">
                        <ion-icon name="call" class="text-lg mb-1"></ion-icon>
                        <span class="text-xs font-normal">Contact</span>
                    </a>
                </li>
                <li>
                    <a href="{{ Request::path() == '/' ? '#faq' : '/#faq' }}"
                        class="flex justify-center flex-col items-center gap-1 text-slate-400 hover:text-slate-800 duration-700">
                        <ion-icon name="help-circle-outline" class="text-lg mb-1"></ion-icon>
                        <span class="text-xs font-normal">FAQ's</span>
                    </a>
                </li>
            </ul>
        </nav>

        {{-- start of button whatsapp --}}
        <div class="fixed bottom-0 right-0 mr-6 mb-24 md:mb-10 lg:mb-6">
            <a href="https://wa.me/62859106849531?text=Halo%20,Test%20pesan%20ya" target="_blank" aria-label="chat with jogjatriptravel admin">
                <span class="flex text-2xl lg:text-3xl p-4 rounded-full bg-slate-100 shadow-md cursor-pointer hover:scale-90 hover:bg-slate-300 duration-500">
                    <ion-icon name="logo-whatsapp"></ion-icon>
                </span>
            </a>
        </div>
    </body>
</html>