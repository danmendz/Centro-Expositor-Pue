<x-app-layout>
    <div class="container mt-4">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Numero de cajón</th>
                    <th scope="col">Estatus</th>
                    <th scope="col">Fecha</th>
                    <th scope="col">Inicio</th>
                    <th scope="col">Fin</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($reservas as $reserva)
                    @php
                        switch ($reserva->estatus) {
                            case 1:
                                $estatus = 'aprobada';
                                break;
                            default:
                                $estatus = 'pendiente';
                                break;
                        }
                    @endphp
                    <tr>
                        <td align="center"><span title="{{ $reserva->id_cajon }}">{{ $reserva->id_cajon }}</span></td>
                        <td align="center"><span title="{{ $estatus }}">{{ $estatus }}</span></td>
                        <td align="center"><span title="{{ $reserva->fecha }}">{{ $reserva->fecha }}</span></td>
                        <td align="center"><span title="{{ $reserva->inicio }}">{{ $reserva->inicio }}</span></td>
                        <td align="center"><span title="{{ $reserva->fin }}">{{ $reserva->fin }}</span></td>
                        <td align="center">
                            <!-- <a href="visualizar.php?id={{ $reserva->id }}" title='Ver detalles de reserva'><i class="bi bi-eye"></i></a>&nbsp; -->
                            <a href="" onClick="confirma('eliminar.php?id_cajon={{ $reserva->id_cajon }}&id_persona={{ $reserva->id_persona }}'); return false;" title='Eliminar reserva'><i class="bi bi-trash3"></i></a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-app-layout>