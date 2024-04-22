@extends('admin.app')

@section('template_title')
    Reservacion Cajon
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Reservacion Cajon') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('reservacion-cajons.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success m-4">
                            <p>{{ $message }}</p>
                        </div>
                    @endif
                    @if ($message = Session::get('error'))
                        <div class="alert alert-danger m-4">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body bg-white">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Fecha</th>
										<th>Inicio</th>
										<th>Fin</th>
										<th>Estatus</th>
										<th>Id Usuario</th>
										<th>Id Cajon</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($reservacionCajons as $reservacionCajon)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $reservacionCajon->fecha }}</td>
											<td>{{ $reservacionCajon->inicio }}</td>
											<td>{{ $reservacionCajon->fin }}</td>
											<td>{{ $reservacionCajon->estatus }}</td>
											<td>{{ $reservacionCajon->id_usuario }}</td>
											<td>{{ $reservacionCajon->id_cajon }}</td>

                                            <td>
                                                <form action="{{ route('reservacion-cajons.destroy',$reservacionCajon->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-success" href="{{ route('reservas.cajon', ['idCajon' => $reservacionCajon->id_cajon, 'idUsuario' => $reservacionCajon->id_usuario] ) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Aprobar') }}</a>
                                                    <a class="btn btn-sm btn-primary " href="{{ route('reservacion-cajons.show',$reservacionCajon->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('reservacion-cajons.edit',$reservacionCajon->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> {{ __('Delete') }}</button>
                                                </form>                                        
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $reservacionCajons->links() !!}
            </div>
        </div>
    </div>
@endsection
