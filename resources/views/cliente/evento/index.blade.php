<x-app-layout>
    <div>
        @if ($eventos != null)
            @foreach($eventos as $evento)
                <div>
                    <p>Nombre: {{ $evento->nombre }}</p>
                    <p>Tipo: {{ $evento->tipo }}</p>
                    <p>Salón: {{ $evento->salon->nombre }}</p>
                    <!-- Mostrar más información del evento según sea necesario -->
                </div>
            @endforeach
        @else
            <p>No hay eventos disponibles por ahora</p>
        @endif
    </div>
</x-app-layout>