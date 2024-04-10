<x-app-layout>
@foreach($eventos as $evento)
    <div>
        <p>Nombre: {{ $evento->nombre }}</p>
        <p>Tipo: {{ $evento->tipo }}</p>
        <p>Salón: {{ $evento->salon->nombre }}</p>
        @if($evento->reserva)
            <p>Estatus de reserva: {{ $evento->reserva->estatus }}</p>
            <!-- Mostrar más información de la reserva según sea necesario -->
        @else
            <p>No hay reserva asociada a este evento.</p>
        @endif
    </div>
@endforeach
</x-app-layout>