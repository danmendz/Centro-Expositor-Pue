<x-app-layout>
    <div class="container mt-4">
        @foreach ($eventos as $evento)
            <div class="card mb-4">
                <div class="card-body">
                    <h5 class="card-title">{{ $evento->nombre }}</h5>
                    <p class="card-text">Tipo: {{ $evento->tipo }}</p>
                    <!-- Otros campos -->
                    <p class="card-text">Salón: {{ $evento->salon->nombre }}</p>
                    <p class="card-text">ID del salón: {{ $evento->salon->id }}</p>
                </div>
            </div>
        @endforeach
    </div>
</x-app-layout>