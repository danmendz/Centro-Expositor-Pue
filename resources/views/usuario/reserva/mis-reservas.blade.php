<x-app-layout>
    <div class="container mt-4">
        <h1>Mis reservas</h1>
        @foreach($eventos as $evento)
            <div class="card mb-4">
                <div class="card-body">
                    <h5 class="card-title">{{ $evento->nombre }}</h5>
                    <p class="card-text">Tipo: {{ $evento->tipo }}</p>
                    <p class="card-text">Salón: {{ $evento->salon->nombre }}</p>
                    @if($evento->reserva)
                        <p class="card-text">Estatus de reserva: {{ $evento->reserva->estatus }}</p>
                        <!-- Mostrar más información de la reserva según sea necesario -->
                    @else
                        <p class="card-text">No hay reserva asociada a este evento.</p>
                    @endif
                </div>
            </div>
        @endforeach
    </div>
</x-app-layout>