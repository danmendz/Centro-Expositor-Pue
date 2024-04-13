<x-app-layout>
    <div class="container mt-4">
        @if ($eventos != null)
            @foreach($eventos as $evento)
                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="card-title">{{ $evento->nombre }}</h5>
                        <p class="card-text">Fecha: {{ $evento->fecha_inicio }}</p>
                        <p class="card-text">Tipo: {{ $evento->tipo }}</p>
                        <p class="card-text">Salón: {{ $evento->salon->nombre }}</p>
                        <p class="card-text">Organizador: {{ $evento->user->name }}</p>
                        <!-- Mostrar más información del evento según sea necesario -->
                    </div>
                </div>
            @endforeach
        @else
            <div class="alert alert-warning" role="alert">
                No hay eventos disponibles por ahora
            </div>
        @endif
    </div>
</x-app-layout>