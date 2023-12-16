<?php

namespace App\Http\Livewire\Pages\Admin;

use App\Models\Search;
use Livewire\Component;

class Main extends Component
{
    public $searchStats;

    public function mount()
    {
        $this->searchStats = Search::select('query')
            ->selectRaw('COUNT(*) as count')
            ->groupBy('query')
            ->orderBy('count', 'DESC')
            ->get();
    }

    public function render()
    {
        return view('livewire.pages.admin.main');
    }
}
