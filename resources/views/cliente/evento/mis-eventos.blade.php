<x-app-layout>
    @foreach ($eventos as $evento)
    <div>
        <p>Nombre: {{ $evento->nombre }}</p>
        <p>Tipo: {{ $evento->tipo }}</p>
        <!-- Otros campos -->
        <p>Salón: {{ $evento->salon->nombre }}</p>
        <p>id: {{ $evento->salon->id }}</p>
    </div>
@endforeach
</x-app-layout>