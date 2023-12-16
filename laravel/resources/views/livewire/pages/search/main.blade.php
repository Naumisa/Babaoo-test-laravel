<div>
    <!-- Affichage du terme de recherche -->
    <h2 class="text-2xl font-bold mb-4">Résultats pour : {{ $searchTerm }}</h2>

    <!-- Affichage des résultats de la recherche -->
    <div>
        @foreach ($results as $result)
            <div class="mb-4">
                <h3 class="text-xl font-bold">{{ $result['title'] }}</h3>
                <p>{{ $result['description'] }}</p>
                <img src="{{ $result['thumbnail'] }}" alt="Thumbnail">
            </div>
        @endforeach
    </div>
</div>
