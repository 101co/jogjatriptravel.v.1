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

    public function selectPaket($title)
    {
        // dd('pressed'.$title);
        // array_push($this->selectedPaket, $title);
        // dd($this->selectedPaket);
    }

    public function render()
    {
        return view('livewire.tourism-catalogue-detail');
    }
}
