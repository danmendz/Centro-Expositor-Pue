@extends('admin.app')

@section('template_title')
    {{ __('Create') }} Reservacion Cajon
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Create') }} Reservacion Cajon</span>
                    </div>
                    <div class="card-body bg-white">
                        <form method="POST" action="{{ route('reservacion-cajons.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('admin.reservacion-cajon.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
