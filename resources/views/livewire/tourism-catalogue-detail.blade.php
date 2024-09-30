<div>
    {{-- hero --}}
    <section class="mt-10" aria-label="Travel Catalogue Hero" wire:ignore>
        <div id="indicators-carousel" class="relative w-full" data-carousel="static" data-carousel-touch="true">
            <!-- Carousel wrapper -->
            <div class="relative h-[344px] overflow-hidden md:h-96">
                @foreach ($coverImages as $item)
                <div class="hidden duration-700 ease-in-out" data-carousel-item="">
                    <img src="{{ asset('/storage/'.$item)}}"
                        class="absolute block h-full object-cover w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                        alt="...">
                </div>
                @endforeach
            </div>
            <!-- Slider indicators -->
            <div class="absolute z-30 flex -translate-x-1/2 space-x-3 rtl:space-x-reverse bottom-5 left-1/2">
                @foreach ($coverImages as $item)
                <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1"
                    data-carousel-slide-to="0">
                </button>
                @endforeach
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
            <h1 class="text-start text-2xl w-4/5 font-bold" aria-label="Catalogue Detail Title">{{ $data->title }}</h1>
            <span class="text-sm font-light flex gap-1 items-center text-start w-4/5 mt-[10px]" wire:ignore>
                <ion-icon name="time-outline"></ion-icon><span>{{ $data->sub_title }}</span>
            </span>

            <!-- facilities -->
            <div class="grid grid-cols-2 gap-y-5 text-sm text-slate-600 mt-7" aria-label="Facilities" wire:ignore>
                @foreach ($facilities as $item)
                <div class="flex items-center gap-2">
                    <ion-icon name="{{ $item->icon_name }}"></ion-icon><span>{{ $item->name }}</span>
                </div>
                @endforeach
            </div>

            <!-- package -->
            <div class="mt-12">
                <h1 class="text-start text-xl w-full font-bold">Package</h1>
                <div class="flex flex-col justify-center mt-8 pb-2 gap-y-8">
                    @foreach ($packages as $item)
                    <div class="bg-slate-200 w-full rounded-2xl overflow-hidden" aria-label="Paket 1">
                        <div class="bg-slate-100 p-5 rounded-2xl flex justify-between">
                            <h2 class="text-xl font-bold">{{ $item['title'] }}</h2>
                            <div class="flex items-center gap-5">
                                <div class="flex -space-x-4 rtl:space-x-reverse">
                                    @foreach ($this->getDestinationMergeLimit($item['destinations']) as $destination)
                                    <img class="w-10 h-10 border-2 border-white rounded-full dark:border-gray-800" src="{{ asset('/storage/'.$destination)}}" alt="">
                                    @endforeach
                                    {{-- wire:click="showDestinationImages({{ json_encode($item['destinations']) }})"  --}}
                                    <button wire:click="showDestinationImages({{ json_encode($item['destinations']) }})" class="flex items-center justify-center w-10 h-10 text-xs font-medium text-white bg-gray-700 border-2 border-white rounded-full hover:bg-gray-600 dark:border-gray-800">+{{ count($this->getDestinationMerge($item['destinations'])) }}</button>
                                </div>
                                <input id="option{{ $item['title'] }}" wire:model.live="selectedPaket" type="checkbox" value="{{ $item['title'] }}" class="w-6 h-6 cursor-pointer rounded-full bg-gray-100 border-gray-500 focus:ring-gray-800 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            </div>
                        </div>
                        <div class="p-5">
                            <ul class="text-base font-light list-disc px-5">
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
        <button type="button" wire:click='sendWhatsapp' class="mx-auto inline-flex items-center px-5 py-2.5 text-sm font-bold text-center text-slate-800 bg-slate-100 rounded-full hover:bg-slate-300 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
            Order
            @if (count($selectedPaket) > 0)
            <span class="inline-flex items-center justify-center w-4 h-4 ms-2 text-xs font-semibold text-slate-100 bg-slate-800 rounded-full">
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
            <div class="relative w-full max-w-3xl py-6 px-4 bg-white rounded-lg shadow-lg">
                <!-- Header -->
                <div class="flex items-center justify-between">
                    <h3 class="text-lg font-medium text-gray-900">Galery</h3>
                    <button @click="openModalGalery = false, category = 'all'" type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <!-- Content -->
                <div class="mt-4 max-h-[calc(100vh-8rem)] overflow-y-auto scrollbar-simple">
                    <div class="px-6">
                        <div class="flex items-center justify-center py-2 md:py-8 flex-wrap">
                            <button @click="category = 'all'" type="button" class="text-gray-900 border border-gray-100 hover:border-gray-300 dark:border-gray-900 dark:bg-gray-900 dark:hover:border-gray-700 bg-white focus:ring-4 focus:outline-none focus:ring-gray-300 rounded-full text-xs font-medium px-5 py-2 text-center me-3 mb-3 dark:text-white dark:focus:ring-gray-800">All</button>
                            @foreach ($destinationCategories as $category)
                            <button @click="category = '{{ strtolower(str_replace(' ', '-', $category)) }}'" type="button" class="text-gray-900 border border-gray-100 hover:border-gray-300 dark:border-gray-900 dark:bg-gray-900 dark:hover:border-gray-700 bg-white focus:ring-4 focus:outline-none focus:ring-gray-300 rounded-full text-xs font-medium px-5 py-2 text-center me-3 mb-3 dark:text-white dark:focus:ring-gray-800">{{ $category }}</button>
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
            class="fixed inset-0 bg-black bg-opacity-75 flex items-center justify-center z-50"
            @keydown.escape.window="showModal = false"
            style="display: none;">
        <div class="relative">
            <img :src="selectedImage" :alt="selectedImage" class="max-w-full max-h-screen">
            <button @click="showModal = false"
                    class="absolute top-0 right-0 mt-4 mr-4 text-white text-sm bg-gray-900 rounded-full p-3">
                &times;
            </button>
        </div>
        </div>
    </div>
</div>