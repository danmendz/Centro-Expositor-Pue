<x-app-layout>
    <div class="row">
        @if ($eventos != null)
            @foreach($eventos as $evento)
                <div class="col-md-4 mb-4">
                    <div class="card mx-4">
                        <img src="{{ asset('images/fiestas/party.jpg') }}" class="card-img-top" alt="Imagen del evento">
                        <div class="card-body bg-light">
                            <h4 class="card-title"><strong>{{ $evento->nombre }}</strong></h4>
                            <p class="card-text"><strong>Fecha:</strong> {{ $evento->fecha_inicio }}</p>
                            <p class="card-text"><strong>Hora de inicio:</strong> {{ $evento->hora_inicio }}</p>
                            <p class="card-text"><strong>Hora de finalizacion:</strong> {{ $evento->hora_fin }}</p>
                            <p class="card-text"><strong>Tipo:</strong> {{ $evento->tipo }}</p>
                            <p class="card-text"><strong>Organizador:</strong> {{ $evento->user->name }}</p>
                            <a href="#" class="btn btn-primary">Ver más</a>
                        </div>
                    </div>
                </div>
            @endforeach
        @else
            <div class="alert alert-warning" role="alert">
                No hay eventos disponibles.
            </div>
        @endif
    </div>
</x-app-layout>