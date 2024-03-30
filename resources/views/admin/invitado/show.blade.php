@extends('admin.app')

@section('template_title')
    {{ $invitado->name ?? __('Show') . " " . __('Invitado') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Invitado</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('invitados.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                        <div class="form-group mb-2 mb20">
                            <strong>Estatus:</strong>
                            {{ $invitado->estatus }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Id Usuario:</strong>
                            {{ $invitado->id_usuario }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Id Evento:</strong>
                            {{ $invitado->id_evento }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Id Area:</strong>
                            {{ $invitado->id_area }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
