<?php

namespace App\Livewire;

use App\Models\Master\Contact;
use App\Models\Transaction\TravelCatalogue;
use Livewire\Component;

class Main extends Component
{
    public function getActiveTravelCatalogue()
    {
        $data = TravelCatalogue::where('is_active', '=', true)->get();
        return $data;
    }

    public function getContactPersonAdmin()
    {
        $data = Contact::where('is_active', '=', true)
                    ->where('is_contact_person', '=', true)
                    ->get();
        return $data;
    }

    public function render()
    {
        $this->getActiveTravelCatalogue();
        return view('livewire.main');
    }
}
