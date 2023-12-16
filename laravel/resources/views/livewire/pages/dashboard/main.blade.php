<div>
    <h1 class="text-xl font-bold mb-4">Historique de Recherche</h1>
    <div class="space-y-4">
        @if (count($searches) > 0)
            @foreach ($searches as $search)
                <div class="bg-white shadow overflow-hidden rounded-md p-4">
                    <p>Recherché le : {{ $search->created_at->format('d/m/Y H:i') }}</p>
                    <p>Terme : {{ $search->query }}</p>
                    <button wire:click="delete({{ $search }})" class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-2 rounded">
                        Supprimer
                    </button>
                </div>
            @endforeach

            <button wire:click="clear" class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-2 rounded">
                Vider l'historique
            </button>
        @else
            Votre historique de recherche est vide.
        @endif
    </div>
</div>
