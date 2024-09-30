<?php

namespace App\Livewire;

use App\Models\Master\Destination;
use App\Models\Master\Facility;
use Livewire\Component;
use App\Models\Transaction\TravelCatalogue;

class TourismCatalogueDetail extends Component
{
    public $data;
    public $facilities;
    public $coverImages;
    public $packages;
    public $selectedPaket = [];

    public $destinationImages = [];
    public $destinationCategories = [];
    public $isOpen = false;

    public function mount($slug)
    {
        // dd('workz**'.$slug);
        $this->data = TravelCatalogue::where('slug', '=', $slug)->first();
        $this->facilities = Facility::whereIn('id', $this->data->facilities)->get();
        $this->coverImages = $this->data->cover_images;
        $this->packages = $this->data->packages;
    }

    public function getDestinationById($id)
    {
        $destination = Destination::where('id', '=', $id)->first();
        return $destination;
    }

    public function getDestinationMergeLimit($ids) 
    {
        $destinations = Destination::whereIn('id', $ids)->pluck('images')->toArray();
        $combined = array_merge(...array_map('array_values', $destinations));
        $limited = array_slice($combined, 0, 3);
        return $limited;
    }

    public function getDestinationMerge($ids) 
    {
        $destinations = Destination::whereIn('id', $ids)->pluck('images')->toArray();
        $combined = array_merge(...array_map('array_values', $destinations));
        return $combined;
    }

    public function showDestinationImages($ids) 
    {
        // $this->isOpen = true;
        $destinations = Destination::whereIn('id', $ids)->get(['name', 'images'])->toArray();
        $this->destinationImages = [];
        foreach ($destinations as $destination) {
            foreach ($destination['images'] as $image) {
                $this->destinationImages[] = [
                    'name' => $destination['name'],
                    'category' => strtolower(str_replace(' ', '-', $destination['name'])),
                    'image' => $image,
                ];
            }
        }

        $this->destinationCategories = array_unique(array_column($this->destinationImages, 'name'));
        $this->dispatch('showGaleryModal');
    }

    public function closeModal()
    {
        $this->isOpen = false;
    }

    public function sendWhatsapp()
    {
        if (empty($this->selectedPaket)) 
        {
            $this->dispatch('show-swal', title: 'Paket belum dipilih', text: 'Pilih paket terlebih dahulu', icon: 'warning');
        }
        else 
        {
            $message = urlencode("Halo mimin Jogja Trip Travel, saya mau info lebih lanjut tentang paket ini:\n" 
                    ."\n*".$this->data->title."*\n"
                    .implode("\n", $this->selectedPaket)
                    ."\n\nTerima kasih mimin.");
            $this->dispatch('open-link-tab', url: "https://wa.me/62859106849531?text=$message");
        }
    }

    public function render()
    {
        return view('livewire.tourism-catalogue-detail');
    }
}
