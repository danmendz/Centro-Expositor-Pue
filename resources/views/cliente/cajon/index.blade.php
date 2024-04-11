<x-app-layout>
<table>
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
<br>

@foreach($cajones as $cajon)
    @php
        switch ($cajon->estatus) {
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

    <div style="width: 100px; height: 100px; background-color: {{ $color }}; display: inline-block; margin: 5px; margin-bottom: 30px;">
        <h1>{{ $cajon->numero }}</h1>
        <form action="{{ route('crear.reserva', ['id_cajon' => $cajon->id]) }}" method="POST">
            @csrf
            <button type="submit">Reservar cajón</button>
        </form>        
        
    </div>
@endforeach
</x-app-layout>