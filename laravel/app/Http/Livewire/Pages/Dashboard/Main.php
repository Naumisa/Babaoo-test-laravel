<?php

namespace App\Http\Livewire\Pages\Dashboard;

use App\Models\Search;
use Livewire\Component;

class Main extends Component
{
    public $userId;
    public $searches;

    public function mount()
    {
        $this->userId = auth()->id();
        $this->searches = Search::where('user_id', $this->userId)->latest()->get();
    }

    public function render()
    {
        return view('livewire.pages.dashboard.main');
    }

    public function delete(Search $search)
    {
        $search->delete();

        return redirect('dashboard')->with('success', 'Recherche supprimée avec succès');
    }

    public function clear()
    {
        foreach ($this->searches AS $search)
        {
            $search->delete();
        }

        return redirect('dashboard')->with('success', 'Recherches vidées avec succès');
    }
}
