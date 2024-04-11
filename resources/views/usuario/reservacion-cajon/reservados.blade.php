<x-app-layout>
    <h1>Cajones reservados</h1>
    @foreach ($cajones as $cajon)
        <div style="width: 100px; height: 100px; background-color: orange; display: inline-block; margin: 5px; margin-bottom: 30px;">
            <h1>{{ $cajon->numero }}</h1>
            <h1>{{ $cajon->nombre }}</h1>
            {{-- <a href="{{ route('visualizar', ['id_cajon' => $cajon->id]) }}"><input type="button" name="Informacion" title="Informacion del cajon"></a> --}}
        </div>
    @endforeach    
</x-app-layout>