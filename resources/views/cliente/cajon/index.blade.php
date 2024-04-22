<x-app-layout>
    <div class="container mt-4">
        <table class="mb-4">
            <tr>
                <td>
                    <h4>Disponible</h4>
                </td>
                <td>
                    <h4>Ocupado</h4>
                </td>
                <td>
                    <h4>Reservado</h4>
                </td>
            </tr>
            <tr>
                <td>
                    <div style="width: 40px; height: 40px; background-color: green; margin: 0 auto;"></div>
                </td>
                <td>
                    <div style="width: 40px; height: 40px; background-color: red; margin: 0 auto;"></div>
                </td>
                <td>
                    <div style="width: 40px; height: 40px; background-color: orange; margin: 0 auto;"></div>
                </td>
            </tr>
        </table>

        <div class="row">
            @foreach($cajones as $cajon)
                @php
                    switch ($cajon->estatus) {
                        case 0:
                            $color = 'green';
                            break;
                        case 1:
                            $color = 'red';
                            break;
                        case 2:
                            $color = 'orange';
                            break;
                        default:
                            $color = 'green';
                            break;
                    }
                @endphp

                <div class="col-md-3 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <div style="width: 100px; height: 100px; background-color: {{ $color }}; display: inline-block; margin: 5px; margin-bottom: 30px;"></div>
                            <h5 class="card-title">Numero: {{ $cajon->numero }}</h5>
                            <h5 class="card-title">Pasillo: {{ $cajon->pasillo }}</h5>
                            <form action="{{ route('crear.reserva', ['id_cajon' => $cajon->id]) }}" method="POST">
                                @csrf
                                <button type="submit" class="btn btn-primary" style="background-color: #0b5ed7; border-color: white">Reservar cajón</button>
                            </form>        
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</x-app-layout>