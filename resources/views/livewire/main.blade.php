<div> 
    {{-- hero --}}
    <section class="mt-16 md:mt-[80px] lg:mt-[85px] md:px-5" aria-label="JogjaTripTravel First Hero">
        <div id="indicators-carousel" class="relative w-full" data-carousel="static" data-carousel-touch="true">
            <!-- Carousel wrapper -->
            <div class="relative h-[344px] md:h-[425px] lg:h-[525px] overflow-hidden md:rounded-2xl">
                <!-- Item 1 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item="">
                    <img src="{{ asset('/storage/images/hero/jogjatriptravel1.jpg')}}"
                        class="absolute block object-cover w-full h-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                        alt="Jogja Trip Travel Hero" loading="lazy">
                    <div class="absolute inset-0 flex flex-col items-center justify-center px-5 bg-black bg-opacity-50">
                        <h1 class="w-4/5 mx-auto leading-8 text-center text-slate-100 text-2xl lg:text-[44px] font-bold">Pilih Tema Wisatamu Sendiri</h1>
                        <p class="w-4/5 mx-auto mt-2 text-base leading-8 text-center text-slate-100 text-opacity-65 lg:mt-5">Temukan berbagai tema wisata sesuai dengan keinginan</p>
                        <a href="#travel-catalogue"
                            class="z-50 text-slate-800 bg-white text-base lg:text-lg font-semibold px-8 py-2 rounded-full mt-4 lg:mt-[30px] focus:outline-none active:scale-95 transition-transform duration-150 ease-in-out">
                            Lihat Katalog
                        </a>
                    </div>
                </div>
                <!-- Item 2 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item="">
                    <img src="{{ asset('/storage/images/hero/jogjatriptravel2.jpg')}}"
                        class="absolute block object-cover w-full h-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                        alt="Jogja Trip Travel Hero" loading="lazy">
                    <div class="absolute inset-0 flex flex-col items-center justify-center px-5 bg-black bg-opacity-50">
                        <h1 class="w-4/5 mx-auto leading-8 text-center text-slate-100 text-2xl lg:text-[44px] font-bold">Jogja Trip Travel</h1>
                        <p class="w-3/4 mx-auto mt-2 text-base text-center leading-1 text-slate-100 text-opacity-65 lg:mt-5">Temukan informasi lebih lanjut tentang pilihan wisata dari Jogja Trip Travel</p>
                        <a href="#contact"
                            class="z-50 text-slate-800 bg-white text-base lg:text-lg font-semibold px-8 py-2 rounded-full mt-4 lg:mt-[30px] focus:outline-none active:scale-95 transition-transform duration-150 ease-in-out">
                            Hubungi Kami
                        </a>
                    </div>
                </div>
                <!-- Item 2 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item="">
                    <img src="{{ asset('/storage/images/hero/jogjatriptravel3.jpg')}}"
                        class="absolute block object-cover w-full h-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                        alt="Jogja Trip Travel Hero" loading="lazy">
                    <div class="absolute inset-0 flex flex-col items-center justify-center px-5 bg-black bg-opacity-50">
                        <h1 class="w-4/5 mx-auto leading-8 text-center text-slate-100 text-2xl lg:text-[44px] font-bold">Sosial Media Jogja Trip Travel</h1>
                        <p class="w-3/4 mx-auto mt-2 text-base text-center leading-1 text-slate-100 text-opacity-65 lg:mt-5">Intip berbagai keseruan wisata Jogja melalui akun sosial media kami</p>
                        <a href="#contact"
                            class="z-50 text-slate-800 bg-white text-base lg:text-lg font-semibold px-8 py-2 rounded-full mt-4 lg:mt-[30px] focus:outline-none active:scale-95 transition-transform duration-150 ease-in-out">
                            Ikuti Kami
                        </a>
                    </div>
                </div>
            </div>
            <!-- Slider indicators -->
            <div class="absolute z-30 flex space-x-3 -translate-x-1/2 rtl:space-x-reverse bottom-5 left-1/2">
                <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1"
                    data-carousel-slide-to="0"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2"
                    data-carousel-slide-to="1"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3"
                    data-carousel-slide-to="2"></button>
            </div>
            <!-- Slider controls -->
            <button type="button"
                class="absolute top-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer start-0 group focus:outline-none"
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
                class="absolute top-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer end-0 group focus:outline-none"
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
    <section id="travel-catalogue" aria-label="JogjaTripTravel Travel Catalogue" class="flex flex-col pt-20 lg:pt-24">
        <h1 class="mx-auto text-2xl md:text-[32px] lg:text-4xl font-bold">Travel Catalogue</h1>
        <span class="text-base lg:text-xl font-light mx-auto text-center w-4/5 mt-[15px] lg:mt-[30px]">Start your journey and enjoy an
            unforgettable experience</span>
        <div class="flex flex-col lg:grid lg:grid-cols-3 lg:items-stretch lg:justify-start lg:place-items-stretch mt-10 lg:mt-[50px] px-5 lg:px-20 gap-y-[20px] lg:gap-x-5 justify-between items-center">
            @foreach ($this->getActiveTravelCatalogue() as $item)
            <div class="relative h-[100px] lg:h-[200px] w-full md:w-[620px] lg:w-auto overflow-hidden rounded-2xl cursor-pointer hover:scale-105 active:scale-105 duration-300">
                <a href="{{ $item->slug }}" data-carousel-item="active">
                    <img src="{{ asset('/storage/'.$item->cover_images[0])}}"
                        class="absolute block object-cover w-full h-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                        alt="Jogja Trip Travel" loading="lazy">
                    <div class="absolute inset-0 flex flex-col items-center justify-center px-5 bg-black bg-opacity-50">
                        <h1 class="mx-auto text-center text-slate-100 text-xl lg:text-[26px] font-bold">{{ $item->title }}</h1>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
    </section>

    {{-- second hero --}}
    <section aria-label="JogjaTripTravel Second Hero" class="relative h-[191px] md:h-[275px] lg:h-[375px] overflow-hidden mt-12 md:mt-14 lg:mt-24">
        <img src="{{ asset('/storage/images/hero/jogjatriptravel4.jpg')}}"
            class="absolute block object-cover w-full h-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
            alt="Jogja Trip Travel" loading="lazy">
        <div class="absolute inset-0 flex flex-col items-center justify-center gap-2 bg-black bg-opacity-50 md:gap-5">
            <p
                class="w-3/4 mx-auto font-light leading-1 text-center text-white opacity-95 text-opacity-65 text-2xl md:text-[30px]">
                Enjoy Your Trip With
            </p>
            <h1 class="w-4/5 mx-auto leading-8 text-center text-slate-100 text-[32px] md:text-[40px] lg:text-[44px] font-bold">Jogja Trip Travel
            </h1>
        </div>
    </section>
        
    {{-- contact us --}}
    <section id="contact" aria-label="JogjaTripTravel Contact Us" class="flex flex-col pt-20 lg:pt-24">
        <h1 class="mx-auto text-2xl md:text-[32px] lg:text-4xl font-bold">Contact Us</h1>
        <span class="text-base lg:text-xl font-light mx-auto text-center w-4/5 mt-[15px] lg:mt-[30px]">Contact our team for further
            information</span>
        <div class="mx-auto mt-[30px] lg:mt-[50px] flex gap-5">
            @foreach ($this->getContactPersonAdmin() as $item)
            <a target="_blank" href="https://wa.me/62{{ $item->phone }}?text=Halo Jogja Trip Travel, saya tertarik dengan paket wisata yang ditawarkan." aria-label="Contact JogjaTripTravel {{ $item->alias }}"
                class="text-white bg-[#2E2E2E] text-base lg:text-lg font-semibold px-8 py-3 rounded-full focus:outline-none active:scale-95 transition-transform duration-150 ease-in-out">
                {{ $item->alias }}
            </a>
            @endforeach
            {{-- <a href="#" aria-label="Contact JogjaTripTravel Admin 2"
                class="text-white bg-[#2E2E2E] text-base lg:text-lg font-semibold px-8 py-3 rounded-full focus:outline-none active:scale-95 transition-transform duration-150 ease-in-out">
                Admin 2
            </a> --}}
        </div>
    </section>

    {{-- faq --}}
    <section id="faq" aria-label="JogjaTripTravel Frequently Asked Question" class="flex flex-col pt-20 lg:pt-24">
        <h1 class="mx-auto text-2xl md:text-[32px] lg:text-4xl font-bold">FAQ's</h1>
        <span class="text-base font-light mx-auto text-center w-4/5 mt-[15px] lg:mt-[30px]">Frequently Asked Question</span>
        <div class="px-5 justify-center mt-[30px] lg:mt-[50px] lg:px-52 xl:px-72">
            <div id="accordion-collapse" data-accordion="collapse">
                <h2 id="accordion-collapse-heading-1">
                    <button type="button"
                        class="flex items-center justify-between w-full gap-3 p-5 text-sm font-semibold text-gray-500 border border-b-0 border-gray-200 rtl:text-right rounded-t-xl focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800"
                        data-accordion-target="#accordion-collapse-body-1" aria-expanded="true"
                        aria-controls="accordion-collapse-body-1">
                        <span>Apa itu Jogja Trip Travel?</span>
                        <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="M9 5 5 1 1 5" />
                        </svg>
                    </button>
                </h2>
                <div id="accordion-collapse-body-1" class="hidden" aria-labelledby="accordion-collapse-heading-1">
                    <div class="p-5 border border-b-0 border-gray-200 dark:border-gray-700 dark:bg-gray-900">
                        <p class="mb-2 text-sm font-light text-gray-500 dark:text-gray-400"><span class="font-bold">Jogja Trip Travel</span> adalah sebuah layanan atau platform yang menawarkan paket perjalanan dan wisata di Yogyakarta, Indonesia. Yogyakarta, atau sering disingkat Jogja, dikenal sebagai salah satu destinasi wisata utama di Indonesia, dengan banyak atraksi budaya, sejarah, dan alam yang menarik.</p>
                    </div>
                </div>
                <h2 id="accordion-collapse-heading-2">
                    <button type="button"
                        class="flex items-center justify-between w-full gap-3 p-5 text-sm font-semibold text-gray-500 border border-b-0 border-gray-200 rtl:text-right focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800"
                        data-accordion-target="#accordion-collapse-body-2" aria-expanded="true"
                        aria-controls="accordion-collapse-body-1">
                        <span>Paket wisata apa saja yang ditawarkan?</span>
                        <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="M9 5 5 1 1 5" />
                        </svg>
                    </button>
                </h2>
                <div id="accordion-collapse-body-2" class="hidden" aria-labelledby="accordion-collapse-heading-2">
                    <div class="p-5 border border-b-0 border-gray-200 dark:border-gray-700 dark:bg-gray-900">
                        <p class="mb-2 text-sm font-light text-gray-500 dark:text-gray-400">Kami menyediakan berbagai pilihan paket wisata sesuai dengan tema wisata yang kamu inginkan. Untuk melihat info paket lebih lengkap kamu bisa klik menu <a href="#travel-catalogue" class="font-semibold">Catalogue</a> dan temukan berbagai informasi paket wisata sesuai keinginanmu.</p>
                    </div>
                </div>
                <h2 id="accordion-collapse-heading-3">
                    <button type="button"
                        class="flex items-center justify-between w-full gap-3 p-5 text-sm font-semibold text-gray-500 border border-gray-200 rtl:text-right focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800"
                        data-accordion-target="#accordion-collapse-body-3" aria-expanded="false"
                        aria-controls="accordion-collapse-body-3">
                        <span class="text-start">Bagaimana cara melakukan booking paket wisata?</span>
                        <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="M9 5 5 1 1 5" />
                        </svg>
                    </button>
                </h2>
                <div id="accordion-collapse-body-3" class="hidden" aria-labelledby="accordion-collapse-heading-3">
                    <div class="p-5 border border-b-0 border-gray-200 dark:border-gray-700 dark:bg-gray-900">
                        <p class="mb-2 text-sm font-light text-gray-500 dark:text-gray-400">Untuk melakukan pemesanan paket wisata yang kamu inginkan, dapat dilakukan dengan cara menghubungi admin kami melalui menu <a href="#contact" class="font-semibold">Contact Us</a> atau melalui menu <a href="#travel-catalogue" class="font-semibold">Catalogue</a> dan pilih paket wisata yang kamu inginkan dengan klik tombol Order</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>