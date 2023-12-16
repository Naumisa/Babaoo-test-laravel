<div>
    <!-- Barre de navigation et connexion utilisateur -->
    <nav class="flex justify-between items-center py-4">
        <!-- Logo ou nom du site -->
        <div>
            <a href="/" class="text-lg font-semibold">Google</a>
        </div>

        <!-- Liens de connexion -->
        <div>
            @auth
                <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 underline">Dashboard</a>
            @else
                <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Connexion</a>
                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Inscription</a>
                @endif
            @endauth
        </div>
    </nav>
</div>
