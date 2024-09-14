<div  class="mt-24">
    {{-- travel catalog --}}
    <section class="px-auto">
        <div id="tourism-catalogue" class="flex flex-col mt-10">
            <h1 class="mx-auto text-2xl font-bold">Tourism Catalogue</h1>
            <span class="text-sm font-light mx-auto text-center w-4/5 mt-[10px]">Find your destination</span>

            <div class="relative px-12 mt-10">
                <input type="text" id="small-input" class="block w-full p-2 px-5 text-gray-900 border border-gray-300 rounded-full bg-gray-50 text-sm focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search your destination ...">
                <div class="absolute inset-y-0 end-0 -translate-x-16 flex items-center ps-3 cursor-pointer">
                    <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                    </svg>
                </div>
            </div>

            <div class="flex flex-col mx-auto mt-14 px-5 gap-y-[35px] justify-between">
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
                            <a href="/tourism-catalogue-detail">
                                <span
                                    class="flex items-center my-auto bg-slate-200 rounded-full p-2 hover:bg-slate-300 hover:scale-105 duration-700 ease-in-out">
                                    <ion-icon class="text-2xl" name="arrow-forward"></ion-icon>
                                </span>
                            </a>
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
            <div class="mx-auto mt-[35px] flex gap-x-5 z-0">
                <a href="/tourism-catalogue"
                    class="z-50 text-white bg-[#696969] text-sm font-semibold px-8 py-3 rounded-full focus:outline-none active:scale-95 transition-transform duration-150 ease-in-out">
                    < Prev
                </a>
                <a href="/tourism-catalogue"
                    class="z-50 text-white bg-[#696969] text-sm font-semibold px-8 py-3 rounded-full focus:outline-none active:scale-95 transition-transform duration-150 ease-in-out">
                    Next >
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
</div>
