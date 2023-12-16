<?php

namespace App\Http\Livewire\Pages\Search;

use Illuminate\Support\Facades\Http;
use Livewire\Component;

class Main extends Component
{
    public $results;
    public $searchTerm;

    public function mount($searchTerm, $results)
    {
        $this->searchTerm = $searchTerm;
        $this->results = $results;
    }

    public function render()
    {
        return view('livewire.pages.search.main');
    }
}
