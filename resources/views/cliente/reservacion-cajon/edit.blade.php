@extends('admin.app')

@section('template_title')
    {{ __('Update') }} Reservacion Cajon
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Update') }} Reservacion Cajon</span>
                    </div>
                    <div class="card-body bg-white">
                        <form method="POST" action="{{ route('reservacion-cajons.update', $reservacionCajon->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('admin.reservacion-cajon.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
