<x-app-layout>
    <div class="container mt-4">
        @foreach($eventos as $evento)
            <div class="card mb-4">
                <div class="card-body">
                    <h5 class="card-title">{{ $evento->nombre }}</h5>
                    <p class="card-text"><strong>Tipo:</strong> {{ $evento->tipo }}</p>
                    <p class="card-text"><strong>Salón:</strong> {{ $evento->salon->nombre }}</p>
                    @if($evento->reserva)
                        <p class="card-text"><strong>Estatus de reserva:</strong> {{ $evento->reserva->estatus }}</p>
                        <!-- Aquí puedes mostrar más información de la reserva según sea necesario -->
                    @else
                        <p class="card-text">No hay reserva asociada a este evento.</p>
                    @endif
                </div>
            </div>
        @endforeach
    </div>
</x-app-layout>