<x-app-layout>
<div class="container">
    <h1>Áreas asignadas</h1>
    <div class="row">
        @foreach($areas as $area)
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">{{ $area->nombre }}</div>
                    <div class="card-body">
                        <p>Capacidad: {{ $area->capacidad }}</p>
                        <!-- Aquí puedes mostrar más información de cada área según tus necesidades -->
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
</x-app-layout>