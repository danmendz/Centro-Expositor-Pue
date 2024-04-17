<x-app-layout>
    <div class="row">
        @foreach($allEventos as $evento)
            <div class="col-md-4 mb-4">
                <div class="card bg-light">
                    <img src="{{ asset('images/globos.jpg') }}" class="card-img-top" alt="Imagen del evento">
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
    </div>
</x-app-layout>