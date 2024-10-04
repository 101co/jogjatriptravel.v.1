<div>
    {{-- hero --}}
    <section class="mt-10" aria-label="Travel Catalogue Hero" wire:ignore>
        <div id="indicators-carousel" class="relative w-full" data-carousel="static" data-carousel-touch="true">
            <!-- Carousel wrapper -->
            <div class="relative h-[344px] overflow-hidden md:h-96">
                @foreach ($coverImages as $item)
                <div class="hidden duration-700 ease-in-out" data-carousel-item="">
                    <img src="{{ asset('/storage/'.$item)}}"
                        class="absolute block object-cover w-full h-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                        alt="Jogja Trip Travel">
                </div>
                @endforeach
            </div>
            <!-- Slider indicators -->
            <div class="absolute z-30 flex space-x-3 -translate-x-1/2 rtl:space-x-reverse bottom-5 left-1/2">
                @foreach ($coverImages as $item)
                <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1"
                    data-carousel-slide-to="0">
                </button>
                @endforeach
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
    
    {{-- detail--}}
    <section class="px-5" aria-label="Travel Detail">
        <div id="tourism-catalogue" class="flex flex-col mt-10">
            <h1 class="w-4/5 text-2xl font-bold text-start" aria-label="Catalogue Detail Title">{{ $data->title }}</h1>
            <span class="text-sm font-light flex gap-1 items-center text-start w-4/5 mt-[10px]" wire:ignore>
                <ion-icon name="time-outline"></ion-icon><span>{{ $data->sub_title }}</span>
            </span>

            <!-- facilities -->
            <div class="grid grid-cols-2 text-sm gap-y-5 text-slate-600 mt-7" aria-label="Facilities" wire:ignore>
                @foreach ($facilities as $item)
                <div class="flex items-center gap-2">
                    <ion-icon name="{{ $item->icon_name }}"></ion-icon><span>{{ $item->name }}</span>
                </div>
                @endforeach
            </div>

            <!-- package -->
            <div class="mt-12">
                <h1 class="w-full text-xl font-bold text-start">Package</h1>
                <div class="flex flex-col justify-center pb-2 mt-8 gap-y-8">
                    @foreach ($packages as $item)
                    <div class="w-full overflow-hidden bg-slate-200 rounded-2xl" aria-label="Paket 1">
                        <div class="flex justify-between p-5 bg-slate-100 rounded-2xl">
                            <h2 class="text-xl font-bold">{{ $item['title'] }}</h2>
                            <div class="flex items-center gap-5">
                                <div class="flex -space-x-4 rtl:space-x-reverse">
                                    @foreach ($this->getDestinationMergeLimit($item['destinations']) as $destination)
                                    <img class="w-10 h-10 border-2 border-white rounded-full dark:border-gray-800" src="{{ asset('/storage/'.$destination)}}" alt="">
                                    @endforeach
                                    {{-- wire:click="showDestinationImages({{ json_encode($item['destinations']) }})"  --}}
                                    <button wire:click="showDestinationImages({{ json_encode($item['destinations']) }})" class="flex items-center justify-center w-10 h-10 text-xs font-medium text-white bg-gray-700 border-2 border-white rounded-full hover:bg-gray-600 dark:border-gray-800">+{{ count($this->getDestinationMerge($item['destinations'])) }}</button>
                                </div>
                                <input id="option{{ $item['title'] }}" wire:model.live="selectedPaket" type="checkbox" value="{{ $item['title'] }}" class="w-6 h-6 bg-gray-100 border-gray-500 rounded-full cursor-pointer focus:ring-gray-800 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            </div>
                        </div>
                        <div class="p-5">
                            <ul class="px-5 text-base font-light list-disc">
                                @foreach ($item['destinations'] as $destination)
                                <li>{{ $this->getDestinationById($destination)->name }}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>

            <!-- additional information -->
            <div class="mt-12">
                <h1 class="w-full text-xl font-bold text-start">Additional Information</h1>
                <div class="flex flex-col justify-center w-full p-5 mt-8 bg-slate-100">
                    <h2 class="font-medium">Fasilitas tidak termasuk</h2>
                    <ul class="px-5 text-base font-light list-disc">
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
    <div class="flex p-8 mt-4 translate-y-12 bg-slate-800">
        <button type="button" wire:click='sendWhatsapp' class="mx-auto inline-flex items-center px-5 py-2.5 text-sm font-bold text-center text-slate-800 bg-slate-100 rounded-full hover:bg-slate-300 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
            Order
            @if (count($selectedPaket) > 0)
            <span class="inline-flex items-center justify-center w-4 h-4 text-xs font-semibold rounded-full ms-2 text-slate-100 bg-slate-800">
            {{ count($selectedPaket) }}
            </span>
            @endif
         </button>
    </div>

    <!-- Modal Structure -->
    <div 
        x-data="{ openModalGalery: false, category: 'all', showModal: false, selectedImage: null }"
        x-init="openModalGalery = false;
            $wire.on('showGaleryModal', () => {
                openModalGalery = true;
                category = 'all';
            });
        "
        x-show="openModalGalery" 
        @keydown.escape.window="openModalGalery = false"
        x-bind:class="{ 'hidden' : !openModalGalery, 'fixed top-0 left-0 right-0 z-50 w-full h-full overflow-y-auto bg-gray-900 bg-opacity-50' : openModalGalery }" 
        aria-modal="true" 
        role="dialog">
        <div class="flex items-center justify-center min-h-screen px-4">
            <div class="relative w-full max-w-3xl px-4 py-6 bg-white rounded-lg shadow-lg">
                <!-- Header -->
                <div class="flex items-center justify-between">
                    <h3 class="text-lg font-medium text-gray-900">Galery</h3>
                    <button @click="openModalGalery = false, category = 'all'" type="button" class="inline-flex items-center justify-center w-8 h-8 text-sm text-gray-400 bg-transparent rounded-lg hover:bg-gray-200 hover:text-gray-900 ms-auto dark:hover:bg-gray-600 dark:hover:text-white">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <!-- Content -->
                <div class="mt-4 max-h-[calc(100vh-8rem)] overflow-y-auto scrollbar-simple">
                    <div class="px-6">
                        <div class="flex flex-wrap items-center justify-center py-2 md:py-8">
                            <button @click="category = 'all'" type="button" class="px-5 py-2 mb-3 text-xs font-medium text-center text-gray-900 bg-white border border-gray-100 rounded-full hover:border-gray-300 dark:border-gray-900 dark:bg-gray-900 dark:hover:border-gray-700 focus:ring-4 focus:outline-none focus:ring-gray-300 me-3 dark:text-white dark:focus:ring-gray-800">All</button>
                            @foreach ($destinationCategories as $category)
                            <button @click="category = '{{ strtolower(str_replace(' ', '-', $category)) }}'" type="button" class="px-5 py-2 mb-3 text-xs font-medium text-center text-gray-900 bg-white border border-gray-100 rounded-full hover:border-gray-300 dark:border-gray-900 dark:bg-gray-900 dark:hover:border-gray-700 focus:ring-4 focus:outline-none focus:ring-gray-300 me-3 dark:text-white dark:focus:ring-gray-800">{{ $category }}</button>
                            @endforeach
                        </div>
                        <div class="grid grid-cols-2 gap-4 py-4">
                            @foreach ($destinationImages as $image)
                            <div x-show="category === 'all' || category === '{{ $image['category'] }}'" 
                                @click="selectedImage = '{{ asset('/storage/'.$image['image']) }}'; showModal = true;"
                                class="overflow-auto cursor-pointer">
                                <img class="h-auto max-w-full rounded-lg" src="{{ asset('/storage/'.$image['image']) }}" alt="">
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div x-show="showModal" 
            x-transition.opacity 
            class="fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-75"
            @keydown.escape.window="showModal = false"
            style="display: none;">
        <div class="relative">
            <img :src="selectedImage" :alt="selectedImage" class="max-w-full max-h-screen">
            <button @click="showModal = false"
                    class="absolute top-0 right-0 p-3 mt-4 mr-4 text-sm text-white bg-gray-900 rounded-full">
                &times;
            </button>
        </div>
        </div>
    </div>
</div>