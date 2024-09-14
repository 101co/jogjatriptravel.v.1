<div>
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
                </div>
                <!-- Item 2 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item="active">
                    <img src="{{ asset('/storage/images/hero/jogja-6.jpg')}}"
                        class="absolute block h-full object-cover w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                        alt="...">
                </div>
                <!-- Item 2 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item="active">
                    <img src="{{ asset('/storage/images/hero/jogja-7.jpg')}}"
                        class="absolute block h-full object-cover w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                        alt="...">
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
    
    {{-- detail--}}
    <section class="px-5">
        <div id="tourism-catalogue" class="flex flex-col mt-10">
            <h1 class="text-start text-2xl w-4/5 font-bold">Yogyakarta City Tour</h1>
            <span class="text-sm font-light flex gap-1 items-center text-start w-4/5 mt-[10px]">
                <ion-icon name="location-outline"></ion-icon><span>Yogyakarta</span>
            </span>

            <!-- facilities -->
            <div class="grid grid-cols-2 gap-y-5 text-xs text-slate-600 mt-5">
                <div class="flex items-center gap-1">
                    <ion-icon name="bed"></ion-icon><span>Hotel</span>
                </div>
                <div class="flex items-center gap-1">
                    <ion-icon name="time"></ion-icon><span>2 days</span>
                </div>
                <div class="flex items-center gap-1">
                    <ion-icon name="journal"></ion-icon><span>Include ticket</span>
                </div>
                <div class="flex items-center gap-1">
                    <ion-icon name="bed"></ion-icon><span>Hotel</span>
                </div>
                <div class="flex items-center gap-1">
                    <ion-icon name="time"></ion-icon><span>2 days</span>
                </div>
                <div class="flex items-center gap-1">
                    <ion-icon name="journal"></ion-icon><span>Include ticket</span>
                </div>
            </div>

            <!-- itenerary -->
            <div class="mt-9">
                <h1 class="text-start text-base w-4/5 font-bold">Itenerary</h1>
                <div class="justify-center mt-4 pb-2">
                    <div id="accordion-collapse" data-accordion="collapse">
                        <h2 id="accordion-collapse-heading-1">
                            <button type="button"
                                class="flex items-center justify-between w-full p-5 font-normal text-xs rtl:text-right text-gray-500 border border-b-0 border-gray-200 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800 gap-3"
                                data-accordion-target="#accordion-collapse-body-1" aria-expanded="true"
                                aria-controls="accordion-collapse-body-1">
                                <span>Hari 1 - Penjemputan di bandara</span>
                                <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M9 5 5 1 1 5" />
                                </svg>
                            </button>
                        </h2>
                        <div id="accordion-collapse-body-1" class="hidden" aria-labelledby="accordion-collapse-heading-1">
                            <div class="p-5 border border-b-0 border-gray-200 dark:border-gray-700 dark:bg-gray-900">
                                <p class="mb-2 text-gray-500 dark:text-gray-400 font-light text-xs">Jogja Trip Travel is a tourism service bureau domiciled in the city of Yogyakarta. Providing various tour packages that local and foreign tourists can choose from.</p>
                            </div>
                        </div>
                        <h2 id="accordion-collapse-heading-2">
                            <button type="button"
                                class="flex items-center justify-between w-full p-5 font-normal text-xs rtl:text-right text-gray-500 border border-b-0 border-gray-200 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800 gap-3"
                                data-accordion-target="#accordion-collapse-body-2" aria-expanded="true"
                                aria-controls="accordion-collapse-body-1">
                                <span>Hari 2 - Pengantaran ke bandara</span>
                                <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M9 5 5 1 1 5" />
                                </svg>
                            </button>
                        </h2>
                        <div id="accordion-collapse-body-2" class="hidden" aria-labelledby="accordion-collapse-heading-2">
                            <div class="p-5 border border-b-0 border-gray-200 dark:border-gray-700 dark:bg-gray-900">
                                <p class="mb-2 text-gray-500 dark:text-gray-400 font-light text-xs">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem at perspiciatis in eligendi. Nam soluta veritatis accusantium rerum adipisci, inventore nostrum distinctio cupiditate laborum? Excepturi quibusdam magni quaerat minus placeat..</p>
                            </div>
                        </div>
                        <h2 id="accordion-collapse-heading-3">
                            <button type="button"
                                class="flex items-center justify-between w-full p-5 font-normal text-xs rtl:text-right text-gray-500 border border-gray-200 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800 gap-3"
                                data-accordion-target="#accordion-collapse-body-3" aria-expanded="false"
                                aria-controls="accordion-collapse-body-3">
                                <span class="text-start">Hari 3 - Pengantaran</span>
                                <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M9 5 5 1 1 5" />
                                </svg>
                            </button>
                        </h2>
                        <div id="accordion-collapse-body-3" class="hidden" aria-labelledby="accordion-collapse-heading-3">
                            <div class="p-5 border border-b-0 border-gray-200 dark:border-gray-700 dark:bg-gray-900">
                                <p class="mb-2 text-gray-500 dark:text-gray-400 font-light text-xs">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Et, rerum alias velit minima tempora nostrum similique esse facilis explicabo provident ut exercitationem enim consectetur necessitatibus totam nulla quibusdam quam quasi!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- syarat & ketentuan -->
            <div class="mt-9">
                <h1 class="text-start text-base w-4/5 font-bold">Terms & conditions</h1>
                <div class="justify-center mt-4 pb-2">
                    <div id="accordion-collapse-2" data-accordion="collapse">
                        <h2 id="accordion-collapse-terms-condition-1">
                            <button type="button"
                                class="flex items-center justify-between w-full p-5 font-normal text-xs rtl:text-right text-gray-500 border border-b-0 border-gray-200 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800 gap-3"
                                data-accordion-target="#accordion-collapse-terms-condition" aria-expanded="true"
                                aria-controls="accordion-collapse-terms-condition">
                                <span>Terms & conditions</span>
                                <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M9 5 5 1 1 5" />
                                </svg>
                            </button>
                        </h2>
                        <div id="accordion-collapse-terms-condition" class="hidden" aria-labelledby="accordion-collapse-heading-1">
                            <div class="p-5 border border-b-0 border-gray-200 dark:border-gray-700 dark:bg-gray-900">
                                <p class="mb-2 text-gray-500 dark:text-gray-400 font-light text-xs">Jogja Trip Travel is a tourism service bureau domiciled in the city of Yogyakarta. Providing various tour packages that local and foreign tourists can choose from.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- order -->
    <div class="mt-4 bg-slate-800 p-8 flex translate-y-12">
        <a href="/tourism-catalogue"
            class="mx-auto z-50 text-slate-800 bg-slate-100 text-sm font-semibold px-8 py-3 rounded-full focus:outline-none active:scale-95 transition-transform duration-150 ease-in-out">
            Order
        </a>
    </div>
</div>
