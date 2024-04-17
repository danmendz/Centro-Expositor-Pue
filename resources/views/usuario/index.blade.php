<x-app-layout>
    <div class="row">
        @foreach($allEventos as $evento)
            <div class="col-md-4 mb-4">
                <div class="card bg-light mx-4">
                    <img src="{{ asset('images/fiestas/globos.jpg') }}" width="70px" height="70px" class="card-img-top" alt="Imagen del evento">
                    <div class="card-body">
                        <h4 class="card-title"><strong>{{ $evento->nombre }}</strong></h4>
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