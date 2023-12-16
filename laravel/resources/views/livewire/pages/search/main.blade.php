<div>
    <!-- Affichage du terme de recherche -->
    <h2 class="text-2xl font-bold mb-4">Résultats pour : {{ $searchTerm }}</h2>

    <!-- Affichage des résultats de la recherche -->
    <div>
        <button wire:click="toggleDisplay" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
            @if ($showImages)
                Afficher les Liens
            @else
                Afficher les Images
            @endif
        </button>

        @foreach ($results as $result)
            <div class="mb-4">
                <h3 class="text-xl font-bold">{{ $result['title'] }}</h3>
                <p>{{ $result['description'] }}</p>
                @if ($showImages)
                    <div class="image">
                        <img src="{{ $result['thumbnail'] }}" alt="Image">
                    </div>
                @else
                    <div class="link">
                        <a href="{{ $result['thumbnail'] }}" target="_blank">{{ $result['thumbnail'] }}</a>
                    </div>
                @endif
            </div>
        @endforeach
    </div>
</div>
