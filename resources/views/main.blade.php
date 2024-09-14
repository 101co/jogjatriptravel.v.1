<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0">

    <title>Jogja Trip Travel | Sahabat Wisata Kamu</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>

<body class="antialiased">
    {{-- navbar --}}
    <nav>
        {{-- <div class="fixed z-50 top-0 right-0 left-0 bg-slate-50 shadow-md">
            <div class="flex items-center justify-between py-4">
                <div class="flex flex-col mx-auto">
                    <a href="#" class="ms-2 text-base font-bold"><img
                            src="{{ asset('/storage/images/logo/jogjatriptravel-1.svg') }}" alt=""></a>
                </div>
                <div class="hidden lg:block">
                    <ul class="flex justify-between gap-4">
                        <li>
                            <a href="#"
                                class="font-light text-base hover:bg-slate-100 px-3 py-2 rounded-full duration-1000 ease-in-out">Beranda</a>
                        </li>
                        <li>
                            <a href="#katalog-wisata"
                                class="font-light text-base hover:bg-slate-100 px-3 py-2 rounded-full duration-1000 ease-in-out">Katalog
                                Wisata</a>
                        </li>
                        <li>
                            <a href="#"
                                class="font-light text-base hover:bg-slate-100 px-3 py-2 rounded-full duration-1000 ease-in-out">Tentang
                                Kami</a>
                        </li>
                        <li>
                            <a href="#"
                                class="font-light text-base hover:bg-slate-100 px-3 py-2 rounded-full duration-1000 ease-in-out">Blog</a>
                        </li>
                        <li>
                            <a href="#"
                                class="font-light text-base hover:bg-slate-100 px-3 py-2 rounded-full duration-1000 ease-in-out">FAQ</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div> --}}
        {{-- <div class="fixed bottom-0 right-0 left-0 md:hidden z-50">
            <ul class="flex justify-between px-5 pt-3 pb-4 border-t-2 border-teal-100 bg-slate-50">
                <li>
                    <a href="#"
                        class="flex justify-center flex-col items-center gap-1 text-slate-400 hover:text-slate-800 duration-700">
                        <ion-icon name="home" class="text-lg mb-1"></ion-icon>
                        <span class="text-xs font-normal">Home</span>
                    </a>
                </li>
                <li>
                    <a href="#tourism-catalogue"
                        class="flex justify-center flex-col items-center gap-1 text-slate-400 hover:text-slate-800 duration-700">
                        <ion-icon name="map" class="text-lg mb-1"></ion-icon>
                        <span class="text-xs font-normal">Catalogue</span>
                    </a>
                </li>
                <li>
                    <a href="#contact"
                        class="flex justify-center flex-col items-center gap-1 text-slate-400 hover:text-slate-800 duration-700">
                        <ion-icon name="call" class="text-lg mb-1"></ion-icon>
                        <span class="text-xs font-normal">Contact</span>
                    </a>
                </li>
                <li>
                    <a href="#faq"
                        class="flex justify-center flex-col items-center gap-1 text-slate-400 hover:text-slate-800 duration-700">
                        <ion-icon name="help-circle-outline" class="text-lg mb-1"></ion-icon>
                        <span class="text-xs font-normal">FAQ's</span>
                    </a>
                </li>
            </ul>
        </div> --}}
    </nav>

    {{-- hero --}}
    <section class="mt-10">
        <div id="indicators-carousel" class="relative w-full" data-carousel="static" data-carousel-touch="true">
            <!-- Carousel wrapper -->
            <div class="relative h-[344px] overflow-hidden md:h-96">
                <!-- Item 1 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item="active">
                    <img src="{{ asset('/storage/images/hero/jogja-5.jpg')}}"
                        class="absolute block h-full object-cover w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                        alt="...">
                    <div
                        class="absolute inset-0 bg-black bg-opacity-50 flex flex-col items-center justify-center gap-3">
                        <h1 class="w-4/5 mx-auto leading-8 text-center text-slate-100 text-2xl font-bold">Explore the
                            authenticy of Yogyakarta city</h1>
                        <p class="w-3/4 mx-auto leading-1 text-center text-slate-100 text-opacity-65 text-xs">Lorem,
                            ipsum dolor sit amet consectetur adipisicing elit. Exercitationem dolorem ipsam animi sequi
                            repudiandae quo nulla, alias laborum.</p>
                        <a href="#"
                            class="z-50 text-slate-800 bg-white text-sm font-semibold px-8 py-2 rounded-full focus:outline-none active:scale-95 transition-transform duration-150 ease-in-out">
                            Explore Now
                        </a>
                    </div>
                </div>
                <!-- Item 2 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item="active">
                    <img src="{{ asset('/storage/images/hero/jogja-6.jpg')}}"
                        class="absolute block h-full object-cover w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                        alt="...">
                    <div
                        class="absolute inset-0 bg-black bg-opacity-50 flex flex-col items-center justify-center gap-3">
                        <h1 class="w-4/5 mx-auto leading-8 text-center text-slate-100 text-2xl font-bold">Enjoy the
                            cityscape of Jogja</h1>
                        <p class="w-3/4 mx-auto leading-1 text-center text-slate-100 text-opacity-65 text-xs">Lorem,
                            ipsum dolor sit amet consectetur adipisicing elit. Exercitationem dolorem ipsam animi sequi
                            repudiandae quo nulla, alias laborum.</p>
                        <a href="#"
                            class="z-50 text-slate-800 bg-white text-sm font-semibold px-8 py-2 rounded-full focus:outline-none active:scale-95 transition-transform duration-150 ease-in-out">
                            Explore Now
                        </a>
                    </div>
                </div>
                <!-- Item 2 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item="active">
                    <img src="{{ asset('/storage/images/hero/jogja-7.jpg')}}"
                        class="absolute block h-full object-cover w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                        alt="...">
                    <div
                        class="absolute inset-0 bg-black bg-opacity-50 flex flex-col items-center justify-center gap-3">
                        <h1 class="w-4/5 mx-auto leading-8 text-center text-slate-100 text-2xl font-bold">Let's go to
                            Bromo Tengger Semeru</h1>
                        <p class="w-3/4 mx-auto leading-1 text-center text-slate-100 text-opacity-65 text-xs">Lorem,
                            ipsum dolor sit amet consectetur adipisicing elit. Exercitationem dolorem ipsam animi sequi
                            repudiandae quo nulla, alias laborum.</p>
                        <a href="#"
                            class="z-50 text-slate-800 bg-white text-sm font-semibold px-8 py-2 rounded-full focus:outline-none active:scale-95 transition-transform duration-150 ease-in-out">
                            Explore Now
                        </a>
                    </div>
                </div>
            </div>
            <!-- Slider indicators -->
            <div class="absolute z-30 flex -translate-x-1/2 space-x-3 rtl:space-x-reverse bottom-5 left-1/2">
                <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1"
                    data-carousel-slide-to="0"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2"
                    data-carousel-slide-to="1"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3"
                    data-carousel-slide-to="2"></button>
            </div>
            <!-- Slider controls -->
            <button type="button"
                class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                data-carousel-prev>
                <span
                    class="inline-flex items-center justify-center w-6 h-6 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                    <svg class="w-2 h-2 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M5 1 1 5l4 4" />
                    </svg>
                    <span class="sr-only">Previous</span>
                </span>
            </button>
            <button type="button"
                class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                data-carousel-next>
                <span
                    class="inline-flex items-center justify-center w-6 h-6 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                    <svg class="w-2 h-2 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 9 4-4-4-4" />
                    </svg>
                    <span class="sr-only">Next</span>
                </span>
            </button>
        </div>
    </section>

    {{-- travel catalog --}}
    <section class="px-auto">
        <div id="tourism-catalogue" class="flex flex-col mt-10">
            <h1 class="mx-auto text-2xl font-bold">Tourism Catalogue</h1>
            <span class="text-sm font-light mx-auto text-center w-4/5 mt-[10px]">Start your journey and enjoy an
                unforgettable experience</span>
            <div class="flex flex-col mx-auto mt-10 px-5 gap-y-[35px] justify-between">
                {{-- item 1 --}}
                <div
                    class="border border-slate-300 bg-white h-auto pb-2 w-full lg:w-72 rounded-2xl hover:scale-105 duration-700 cursor-pointer">
                    <img class="w-full h-4/5 rounded-2xl object-cover"
                        src="{{ asset('/storage/images/hero/jogja-6.jpg') }}" alt="image">
                    <div class="flex flex-row mx-5">
                        <div class="flex flex-col my-5">
                            <h1 class="font-bold text-xl">Yogyakarta City Tour</h1>
                            <ul class="flex flex-row mt-4 gap-x-4 text-xs font-light text-slate-400 items-center">
                                <li class="flex items-center gap-1">
                                    <ion-icon name="bed"></ion-icon><span>Hotel</span>
                                </li>
                                <li class="flex items-center gap-1">
                                    <ion-icon name="time"></ion-icon><span>2 days</span>
                                </li>
                                <li class="flex items-center gap-1">
                                    <ion-icon name="journal"></ion-icon><span>Ticket</span>
                                </li>
                            </ul>
                        </div>
                        <div class="ml-auto flex items-end">
                            <span
                                class="flex items-center my-auto bg-slate-200 rounded-full p-2 hover:bg-slate-300 hover:scale-105 duration-700 ease-in-out">
                                <ion-icon class="text-2xl" name="arrow-forward"></ion-icon>
                            </span>
                        </div>
                    </div>
                </div>
                {{-- item 2 --}}
                <div
                    class="border border-slate-300 bg-white h-auto pb-2 w-full lg:w-72 rounded-2xl hover:scale-105 duration-700 cursor-pointer">
                    <img class="w-full h-4/5 rounded-2xl object-cover"
                        src="{{ asset('/storage/images/hero/jogja-7.jpg') }}" alt="image">
                    <div class="flex flex-row mx-5">
                        <div class="flex flex-col my-5">
                            <h1 class="font-bold text-xl">Bromo Tengger Semeru</h1>
                            <ul class="flex flex-row mt-4 gap-x-4 text-xs font-light text-slate-400 items-center">
                                <li class="flex items-center gap-1">
                                    <ion-icon name="bed"></ion-icon><span>Hotel</span>
                                </li>
                                <li class="flex items-center gap-1">
                                    <ion-icon name="time"></ion-icon><span>2 days</span>
                                </li>
                                <li class="flex items-center gap-1">
                                    <ion-icon name="journal"></ion-icon><span>Ticket</span>
                                </li>
                            </ul>
                        </div>
                        <div class="ml-auto flex items-end">
                            <span
                                class="flex items-center my-auto bg-slate-200 rounded-full p-2 hover:bg-slate-300 hover:scale-105 duration-700 ease-in-out">
                                <ion-icon class="text-2xl" name="arrow-forward"></ion-icon>
                            </span>
                        </div>
                    </div>
                </div>
                {{-- item 3 --}}
                <div
                    class="border border-slate-300 bg-white h-auto pb-2 w-full lg:w-72 rounded-2xl hover:scale-105 duration-700 cursor-pointer">
                    <img class="w-full h-4/5 rounded-2xl object-cover"
                        src="{{ asset('/storage/images/hero/jogja-8.jpg') }}" alt="image">
                    <div class="flex flex-row mx-5">
                        <div class="flex flex-col my-5">
                            <h1 class="font-bold text-xl">Dewata Bali Island</h1>
                            <ul class="flex flex-row mt-4 gap-x-4 text-xs font-light text-slate-400 items-center">
                                <li class="flex items-center gap-1">
                                    <ion-icon name="bed"></ion-icon><span>Hotel</span>
                                </li>
                                <li class="flex items-center gap-1">
                                    <ion-icon name="time"></ion-icon><span>4 days</span>
                                </li>
                                <li class="flex items-center gap-1">
                                    <ion-icon name="journal"></ion-icon><span>Ticket</span>
                                </li>
                            </ul>
                        </div>
                        <div class="ml-auto flex items-end">
                            <span
                                class="flex items-center my-auto bg-slate-200 rounded-full p-2 hover:bg-slate-300 hover:scale-105 duration-700 ease-in-out">
                                <ion-icon class="text-2xl" name="arrow-forward"></ion-icon>
                            </span>
                        </div>
                    </div>
                </div>
                {{-- item 4 --}}
                <div
                    class="border border-slate-300 bg-white h-auto pb-2 w-full lg:w-72 rounded-2xl hover:scale-105 duration-700 cursor-pointer">
                    <img class="w-full h-4/5 rounded-2xl object-cover"
                        src="{{ asset('/storage/images/hero/jogja-9.jpg') }}" alt="image">
                    <div class="flex flex-row mx-5">
                        <div class="flex flex-col my-5">
                            <h1 class="font-bold text-xl">Bunaken Snorkeling</h1>
                            <ul class="flex flex-row mt-4 gap-x-4 text-xs font-light text-slate-400 items-center">
                                <li class="flex items-center gap-1">
                                    <ion-icon name="bed"></ion-icon><span>Hotel</span>
                                </li>
                                <li class="flex items-center gap-1">
                                    <ion-icon name="time"></ion-icon><span>2 days</span>
                                </li>
                                <li class="flex items-center gap-1">
                                    <ion-icon name="journal"></ion-icon><span>Ticket</span>
                                </li>
                            </ul>
                        </div>
                        <div class="ml-auto flex items-end">
                            <span
                                class="flex items-center my-auto bg-slate-200 rounded-full p-2 hover:bg-slate-300 hover:scale-105 duration-700 ease-in-out">
                                <ion-icon class="text-2xl" name="arrow-forward"></ion-icon>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mx-auto mt-[35px]">
                <a href="/tourism-catalogue"
                    class="z-50 text-white bg-[#2E2E2E] text-sm font-semibold px-8 py-3 rounded-full focus:outline-none active:scale-95 transition-transform duration-150 ease-in-out">
                    Explore Now
                </a>
            </div>
        </div>
    </section>

    {{-- second hero --}}
    <div class="relative h-[191px] overflow-hidden mt-12">
        <!-- Item 1 -->
        <div>
            <img src="{{ asset('/storage/images/hero/jogja-10.jpg')}}"
                class="absolute block h-full object-cover w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                alt="...">
            <div class="absolute inset-0 bg-black bg-opacity-50 flex flex-col items-center justify-center gap-2">
                <p
                    class="w-3/4 mx-auto font-light leading-1 text-center text-white opacity-95 text-opacity-65 text-2xl">
                    Enjoy Your Trip With
                </p>
                <h1 class="w-4/5 mx-auto leading-8 text-center text-slate-100 text-[32px] font-bold">Jogja Trip Travel
                </h1>
            </div>
        </div>
    </div>

    {{-- contact us --}}
    <section>
        <div id="contact" class="flex flex-col mt-12">
            <h1 class="mx-auto text-2xl font-bold">Contact Us</h1>
            <span class="text-sm font-light mx-auto text-center w-4/5 mt-[10px]">Contact our team for further
                information</span>
            <div class="mx-auto mt-[30px] flex gap-3">
                <a href="#"
                    class="text-white bg-[#2E2E2E] text-sm font-semibold px-8 py-3 rounded-full focus:outline-none active:scale-95 transition-transform duration-150 ease-in-out">
                    Admin 1
                </a>
                <a href="#"
                    class="text-white bg-[#2E2E2E] text-sm font-semibold px-8 py-3 rounded-full focus:outline-none active:scale-95 transition-transform duration-150 ease-in-out">
                    Admin 2
                </a>
            </div>
        </div>
    </section>

    {{-- faq --}}
    <section>
        <div id="faq" class="flex flex-col mt-12">
            <h1 class="mx-auto text-2xl font-bold">FAQ's</h1>
            <span class="text-sm font-light mx-auto text-center w-4/5 mt-[10px]">Frequently Asked Question</span>
            <div class="px-5 justify-center mt-[30px]">
                <div id="accordion-collapse" data-accordion="collapse">
                    <h2 id="accordion-collapse-heading-1">
                        <button type="button"
                            class="flex items-center justify-between w-full p-5 font-semibold text-sm rtl:text-right text-gray-500 border border-b-0 border-gray-200 rounded-t-xl focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800 gap-3"
                            data-accordion-target="#accordion-collapse-body-1" aria-expanded="true"
                            aria-controls="accordion-collapse-body-1">
                            <span>What is Jogja Trip Travel?</span>
                            <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M9 5 5 1 1 5" />
                            </svg>
                        </button>
                    </h2>
                    <div id="accordion-collapse-body-1" class="hidden" aria-labelledby="accordion-collapse-heading-1">
                        <div class="p-5 border border-b-0 border-gray-200 dark:border-gray-700 dark:bg-gray-900">
                            <p class="mb-2 text-gray-500 dark:text-gray-400 font-light text-sm">Jogja Trip Travel is a tourism service bureau domiciled in the city of Yogyakarta. Providing various tour packages that local and foreign tourists can choose from.</p>
                        </div>
                    </div>
                    <h2 id="accordion-collapse-heading-2">
                        <button type="button"
                            class="flex items-center justify-between w-full p-5 font-semibold text-sm rtl:text-right text-gray-500 border border-b-0 border-gray-200 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800 gap-3"
                            data-accordion-target="#accordion-collapse-body-2" aria-expanded="true"
                            aria-controls="accordion-collapse-body-1">
                            <span>How to order toursim package?</span>
                            <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M9 5 5 1 1 5" />
                            </svg>
                        </button>
                    </h2>
                    <div id="accordion-collapse-body-2" class="hidden" aria-labelledby="accordion-collapse-heading-2">
                        <div class="p-5 border border-b-0 border-gray-200 dark:border-gray-700 dark:bg-gray-900">
                            <p class="mb-2 text-gray-500 dark:text-gray-400 font-light text-sm">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem at perspiciatis in eligendi. Nam soluta veritatis accusantium rerum adipisci, inventore nostrum distinctio cupiditate laborum? Excepturi quibusdam magni quaerat minus placeat..</p>
                        </div>
                    </div>
                    <h2 id="accordion-collapse-heading-3">
                        <button type="button"
                            class="flex items-center justify-between w-full p-5 font-semibold text-sm rtl:text-right text-gray-500 border border-gray-200 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800 gap-3"
                            data-accordion-target="#accordion-collapse-body-3" aria-expanded="false"
                            aria-controls="accordion-collapse-body-3">
                            <span class="text-start">Can we make a Down Payment?</span>
                            <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M9 5 5 1 1 5" />
                            </svg>
                        </button>
                    </h2>
                    <div id="accordion-collapse-body-3" class="hidden" aria-labelledby="accordion-collapse-heading-3">
                        <div class="p-5 border border-b-0 border-gray-200 dark:border-gray-700 dark:bg-gray-900">
                            <p class="mb-2 text-gray-500 dark:text-gray-400 font-light text-sm">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Et, rerum alias velit minima tempora nostrum similique esse facilis explicabo provident ut exercitationem enim consectetur necessitatibus totam nulla quibusdam quam quasi!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- footer --}}
    <div class="w-full bg-[#D8D8D8] mt-12 h-auto py-5 mb-16">
        <ul class="flex flex-col text-center justify-center text-sm gap-y-1">
            <li>
                <a href="#">About us</a>
            </li>
            <li>
                <a href="#">Terms & conditions</a>
            </li>
            <li>
                <a href="#">Privacy policy</a>
            </li>
        </ul>
        <hr class="bg-slate-700 mx-5 mt-5">
        <ul class="flex flex-row text-center justify-center text-sm gap-x-3 mt-4">
            <li><a href=""><img src="{{ asset('/storage/images/icons/instagram.svg') }}" alt=""></a></li>
            <li><a href=""><img src="{{ asset('/storage/images/icons/facebook.svg') }}" alt=""></a></li>
            <li><a href=""><img src="{{ asset('/storage/images/icons/youtube.svg') }}" alt=""></a></li>
            <li><a href=""><img src="{{ asset('/storage/images/icons/twitter.svg') }}" alt=""></a></li>
        </ul>
        <span class="flex text-center justify-center text-xs mt-4 opacity-65">Copyright &copy; {{ date('Y') }},&nbsp;<a href="https://jogjatriptravel.com"> <span> Jogja Trip Travel </span> </a>,&nbsp;Indonesia</span>
    </div>

    {{-- start of button whatsapp --}}
    <div class="fixed bottom-0 right-0 mr-6 mb-24 lg:mb-6">
        <span
            class="flex text-2xl lg:text-3xl p-4 rounded-full bg-slate-100 shadow-md cursor-pointer hover:scale-90 hover:bg-slate-300 duration-500">
            <ion-icon name="logo-whatsapp"></ion-icon>
        </span>
    </div>
</body>

</html>