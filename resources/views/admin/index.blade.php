@extends('admin.app')

@section('content')
    <div class="row">
        @foreach($allEventos as $evento)
            <div class="col-md-4 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{ $evento->nombre }}</h5>
                        <p class="card-text">Fecha: {{ $evento->fecha_inicio }}</p>
                        <p class="card-text">Tipo: {{ $evento->tipo }}</p>
                        <p class="card-text">Organizador: {{ $evento->user->name }}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection