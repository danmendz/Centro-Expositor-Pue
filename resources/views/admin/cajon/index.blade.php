@extends('admin.app')

@section('template_title')
    Cajon
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Cajon') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('cajons.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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

                    <div class="card-body bg-white">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Numero</th>
										<th>Estatus</th>
										<th>Id Area</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($cajons as $cajon)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $cajon->numero }}</td>
											<td>{{ $cajon->estatus }}</td>
											<td>{{ $cajon->id_area }}</td>

                                            <td>
                                                <form action="{{ route('cajons.destroy',$cajon->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('cajons.show',$cajon->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('cajons.edit',$cajon->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
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
                {!! $cajons->links() !!}
            </div>
        </div>
    </div>
@endsection
