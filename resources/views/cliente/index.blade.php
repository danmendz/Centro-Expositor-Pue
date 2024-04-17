<x-app-layout>
    <div class="row">
        @if ($eventos != null)
            @foreach($eventos as $evento)
                <div class="col-md-4 mb-4">
                    <div class="card bg-light">
                        <img src="{{ asset('images/drinks.jpg') }}" class="card-img-top" alt="Imagen del evento">
                        <div class="card-body">
                            <h5 class="card-title text-primary">{{ $evento->nombre }}</h5>
                            <p class="card-text"><strong>Fecha:</strong> {{ $evento->fecha_inicio }}</p>
                            <p class="card-text"><strong>Tipo:</strong> {{ $evento->tipo }}</p>
                            <p class="card-text"><strong>Organizador:</strong> {{ $evento->user->name }}</p>
                            <a href="#" class="btn btn-primary">Ver más</a>
                        </div>
                    </div>
                </div>
            @endforeach
        @else
            <div class="alert alert-warning" role="alert">
            </div>
        @endif
    </div>
</x-app-layout>