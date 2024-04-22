<x-app-layout>
    <div class="container mt-4">
        @foreach ($eventos as $evento)
            <div class="card mb-4">
                <div class="card-body">
                    <h5 class="card-title">{{ $evento->nombre }}</h5>
                    <p class="card-text"><strong>Fecha:</strong> {{ $evento->fecha_inicio }}</p>
                    <p class="card-text"><strong>Hora de inicio:</strong> {{ $evento->hora_inicio }}</p>
                    <p class="card-text"><strong>Hora de finalizacion:</strong> {{ $evento->hora_fin }}</p>
                    <p class="card-text"><strong>Tipo:</strong> {{ $evento->tipo }}</p>
                    <p class="card-text">Salón: {{ $evento->salon->nombre }}</p>
                </div>
            </div>
        @endforeach
    </div>
</x-app-layout>