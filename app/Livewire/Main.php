<?php

namespace App\Livewire;

use App\Models\Transaction\TravelCatalogue;
use Livewire\Component;

class Main extends Component
{
    public function getActiveTravelCatalogue()
    {
        $data = TravelCatalogue::where('is_active', '=', true)->get();
        return $data;
        // dd($data);
    }

    public function render()
    {
        $this->getActiveTravelCatalogue();
        return view('livewire.main');
    }
}
