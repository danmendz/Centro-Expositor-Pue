<x-app-layout>
    <div class="container mt-4">
        @if ($message = Session::get('success'))
            <div class="alert alert-success" role="alert">
                {{ $message }}
            </div>
        @endif

        @if ($message = Session::get('error'))
            <div class="alert alert-danger" role="alert">
                {{ $message }}
            </div>
        @endif

        <h1>Áreas asignadas</h1>
        <div class="row">
            @foreach($areas as $area)
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <div class="card-header">{{ $area->nombre }}</div>
                        <div class="card-body">
                            <p class="card-text">Capacidad: {{ $area->capacidad }}</p>
                            <a href="{{ route('listar.cajones', ['id_area' => $area->id]) }}" class="btn btn-primary">Ver Cajones</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</x-app-layout>