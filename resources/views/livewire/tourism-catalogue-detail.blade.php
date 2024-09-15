<div>
    {{-- hero --}}
    <section class="mt-10" aria-label="Travel Catalogue Hero">
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
    <section class="px-5" aria-label="Travel Detail">
        <div id="tourism-catalogue" class="flex flex-col mt-10">
            <h1 class="text-start text-2xl w-4/5 font-bold" aria-label="Catalogue Detail Title">Historical Trip</h1>
            <span class="text-sm font-light flex gap-1 items-center text-start w-4/5 mt-[10px]">
                <ion-icon name="time-outline"></ion-icon><span>One Day Trip</span>
            </span>

            <!-- facilities -->
            <div class="grid grid-cols-2 gap-y-5 text-xs text-slate-600 mt-7" aria-label="Facilities">
                <div class="flex items-center gap-2">
                    <ion-icon name="car-outline"></ion-icon><span>Transport</span>
                </div>
                <div class="flex items-center gap-2">
                    <ion-icon name="navigate-outline"></ion-icon><span>Drop & Pickup</span>
                </div>
                <div class="flex items-center gap-2">
                    <ion-icon name="people-outline"></ion-icon><span>Driver & Tour Guide</span>
                </div>
                <div class="flex items-center gap-2">
                    <ion-icon name="cash-outline"></ion-icon><span>Retribution & Parking</span>
                </div>
                <div class="flex items-center gap-2">
                    <ion-icon name="leaf-outline"></ion-icon><span>Fuel</span>
                </div>
                <div class="flex items-center gap-2">
                    <ion-icon name="camera-outline"></ion-icon><span>Photo</span>
                </div>
                <div class="flex items-center gap-2">
                    <ion-icon name="ticket-outline"></ion-icon><span>Ticket</span>
                </div>
                <div class="flex items-center gap-2">
                    <ion-icon name="fast-food-outline"></ion-icon><span>Mineral Water</span>
                </div>
            </div>

            <!-- package -->
            <div class="mt-12">
                <h1 class="text-start text-xl w-full font-bold">Package</h1>
                <div class="flex flex-col justify-center mt-8 pb-2 gap-y-8">
                    <div class="bg-slate-200 w-full rounded-2xl overflow-hidden" aria-label="Paket 1">
                        <div class="bg-slate-100 p-5 rounded-2xl flex justify-between">
                            <h2 class="text-xl font-bold">Paket 1</h2>
                            <div class="flex items-center gap-5">
                                <div class="flex -space-x-4 rtl:space-x-reverse">
                                    <img class="w-10 h-10 border-2 border-white rounded-full dark:border-gray-800" src="{{ asset('/storage/images/hero/jogja-5.jpg')}}" alt="">
                                    <img class="w-10 h-10 border-2 border-white rounded-full dark:border-gray-800" src="{{ asset('/storage/images/hero/jogja-6.jpg')}}" alt="">
                                    <img class="w-10 h-10 border-2 border-white rounded-full dark:border-gray-800" src="{{ asset('/storage/images/hero/jogja-7.jpg')}}" alt="">
                                    <a class="flex items-center justify-center w-10 h-10 text-xs font-medium text-white bg-gray-700 border-2 border-white rounded-full hover:bg-gray-600 dark:border-gray-800" href="#">+5</a>
                                </div>
                                <input id="checkbox" type="checkbox" value="" class="w-6 h-6 cursor-pointer rounded-full bg-gray-100 border-gray-500 focus:ring-gray-800 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            </div>
                        </div>
                        <div class="p-5">
                            <ul class="text-base font-light list-disc px-5">
                                <li>Tamansari</li>
                                <li>Kraton Yogyakarta</li>
                                <li>Studio Alam Gamplong</li>
                                <li>Pronosutan View</li>
                            </ul>
                        </div>
                    </div>
                    <div class="bg-slate-200 w-full rounded-2xl overflow-hidden" aria-label="Paket 2">
                        <div class="bg-slate-100 p-5 rounded-2xl flex justify-between">
                            <h2 class="text-xl font-bold">Paket 2</h2>
                            <div class="flex items-center gap-5">
                                <div class="flex -space-x-4 rtl:space-x-reverse">
                                    <img class="w-10 h-10 border-2 border-white rounded-full dark:border-gray-800" src="{{ asset('/storage/images/hero/jogja-5.jpg')}}" alt="">
                                    <img class="w-10 h-10 border-2 border-white rounded-full dark:border-gray-800" src="{{ asset('/storage/images/hero/jogja-6.jpg')}}" alt="">
                                    <img class="w-10 h-10 border-2 border-white rounded-full dark:border-gray-800" src="{{ asset('/storage/images/hero/jogja-7.jpg')}}" alt="">
                                    <a class="flex items-center justify-center w-10 h-10 text-xs font-medium text-white bg-gray-700 border-2 border-white rounded-full hover:bg-gray-600 dark:border-gray-800" href="#">+5</a>
                                </div>
                                <input id="checkbox" type="checkbox" value="" class="w-6 h-6 cursor-pointer rounded-full bg-gray-100 border-gray-500 focus:ring-gray-800 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            </div>
                        </div>
                        <div class="p-5">
                            <ul class="text-base font-light list-disc px-5">
                                <li>Tamansari</li>
                                <li>Kraton Yogyakarta</li>
                                <li>Candi Borobudur</li>
                                <li>Svargabumi / Obelix Village</li>
                                <li>VW Borobudur (Optional)</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- additional information -->
            <div class="mt-12">
                <h1 class="text-start text-xl w-full font-bold">Additional Information</h1>
                <div class="flex flex-col justify-center mt-8 bg-slate-100 w-full p-5">
                    <h2 class="font-medium">Fasilitas tidak termasuk</h2>
                    <ul class="text-base font-light list-disc px-5">
                        <li>Sewa jeep / vw</li>
                        <li>Makan & keperluan pribadi</li>
                        <li>Spot foto berbayar (jika ada)</li>
                        <li>Tips driver / guide sukarela</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- order -->
    <div class="mt-4 bg-slate-800 p-8 flex translate-y-12">
        {{-- <a href="/tourism-catalogue"
            class="mx-auto z-50 text-slate-800 bg-slate-100 text-sm font-semibold px-8 py-3 rounded-full focus:outline-none active:scale-95 transition-transform duration-150 ease-in-out">
            Order
        </a> --}}
        <button type="button" class="mx-auto inline-flex items-center px-5 py-2.5 text-sm font-bold text-center text-slate-800 bg-slate-100 rounded-full hover:bg-slate-300 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
            Order
            <span class="inline-flex items-center justify-center w-4 h-4 ms-2 text-xs font-semibold text-slate-100 bg-slate-800 rounded-full">
            2
            </span>
        </button>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
      const carouselElement = document.getElementById('indicators-carousel');
      let startX = 0;
      let endX = 0;
  
      // Detect when the user starts touching the screen
      carouselElement.addEventListener('touchstart', function (e) {
        startX = e.touches[0].clientX;
      });
  
      // Detect when the user moves their finger
      carouselElement.addEventListener('touchmove', function (e) {
        endX = e.touches[0].clientX;
      });
  
      // Detect when the user lifts their finger
      carouselElement.addEventListener('touchend', function () {
        const diffX = startX - endX;
  
        // If swipe is significant, navigate the carousel
        if (Math.abs(diffX) > 50) {
          if (diffX > 0) {
            // Swipe left, show the next slide
            document.querySelector('[data-carousel-next]').click();
          } else {
            // Swipe right, show the previous slide
            document.querySelector('[data-carousel-prev]').click();
          }
        }
      });
    });
</script>
