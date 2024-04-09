@extends('admin.app')

@section('template_title')
    {{ $reservacionCajon->name ?? __('Show') . " " . __('Reservacion Cajon') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Reservacion Cajon</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('reservacion-cajons.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                        <div class="form-group mb-2 mb20">
                            <strong>Fecha:</strong>
                            {{ $reservacionCajon->fecha }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Inicio:</strong>
                            {{ $reservacionCajon->inicio }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Fin:</strong>
                            {{ $reservacionCajon->fin }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Estatus:</strong>
                            {{ $reservacionCajon->estatus }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Id Usuario:</strong>
                            {{ $reservacionCajon->id_usuario }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Id Cajon:</strong>
                            {{ $reservacionCajon->id_cajon }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
