@extends('admin.app')

@section('template_title')
    {{ $salon->name ?? __('Show') . " " . __('Salon') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Salon</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('salons.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                        <div class="form-group mb-2 mb20">
                            <strong>Nombre:</strong>
                            {{ $salon->nombre }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Capacidad:</strong>
                            {{ $salon->capacidad }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Precio:</strong>
                            {{ $salon->precio }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Tamano:</strong>
                            {{ $salon->tamano }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Direccion:</strong>
                            {{ $salon->direccion }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Estatus:</strong>
                            {{ $salon->estatus }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
