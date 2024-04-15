@extends('layouts.app')

@section('template_title')
    {{ $evento->name ?? __('Show') . " " . __('Evento') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Evento</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('eventos.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                        <div class="form-group mb-2 mb20">
                            <strong>Nombre:</strong>
                            {{ $evento->nombre }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Tipo:</strong>
                            {{ $evento->tipo }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Asistentes:</strong>
                            {{ $evento->asistentes }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Acceso:</strong>
                            {{ $evento->acceso }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Comentarios:</strong>
                            {{ $evento->comentarios }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Fecha Inicio:</strong>
                            {{ $evento->fecha_inicio }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Fecha Fin:</strong>
                            {{ $evento->fecha_fin }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Hora Inicio:</strong>
                            {{ $evento->hora_inicio }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Hora Fin:</strong>
                            {{ $evento->hora_fin }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Estatus:</strong>
                            {{ $evento->estatus }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Id Usuario:</strong>
                            {{ $evento->id_usuario }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Id Salon:</strong>
                            {{ $evento->id_salon }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
