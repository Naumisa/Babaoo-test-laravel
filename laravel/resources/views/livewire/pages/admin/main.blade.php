<div>
    <h1>Statistiques des Recherches</h1>
    <div class="space-y-4">
        @foreach ($searchStats as $stat)
            <div class="bg-white shadow overflow-hidden rounded-md p-4">
                <p>{{ $stat->query }} : {{ $stat->count }} recherches</p>
            </div>
        @endforeach
    </div>
</div>
