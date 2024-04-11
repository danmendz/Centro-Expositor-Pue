<x-app-layout>
    @if ($message = Session::get('success'))
        <div class="alert alert-success m-4">
            <p>{{ $message }}</p>
        </div>
    @endif

    @if ($message = Session::get('error'))
        <div class="alert alert-danger m-4">
            <p>{{ $message }}</p>
        </div>
    @endif
<div class="container">
    <h1>Áreas asignadas</h1>
    <div class="row">
        @foreach($areas as $area)
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">{{ $area->nombre }}</div>
                    <div class="card-body">
                        <p>Capacidad: {{ $area->capacidad }}</p>
                        <p>ID: {{ $area->id }}</p>
                        <a href="{{ route('listar.cajones', ['id_area' => $area->id]) }}" class="btn btn-primary">Ver Cajones</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
</x-app-layout>