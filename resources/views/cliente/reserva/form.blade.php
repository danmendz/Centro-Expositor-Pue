<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        {{-- <div class="form-group mb-2 mb20">
            <label for="id_evento" class="form-label">{{ __('Id Evento') }}</label>
            <input type="text" name="id_evento" class="form-control @error('id_evento') is-invalid @enderror" value="{{ old('id_evento', $reserva?->id_evento) }}" id="id_evento" placeholder="Id Evento">
            {!! $errors->first('id_evento', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div> --}}

        <div class="form-group mb-2 mb20">
            <label for="id_evento" class="form-label">{{ __('Evento') }}</label>
            <select name="id_evento" class="form-control @error('id_evento') is-invalid @enderror" id="id_evento">
                @foreach($eventos as $eventoId => $evento)
                    <option value="{{ $eventoId }}" {{ old('id_evento', $evento->id_evento ?? null) == $eventoId ? 'selected' : '' }}>
                        {{ $evento->nombre }}
                    </option>
                @endforeach
            </select>
            {!! $errors->first('id_evento', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

        <div class="form-group mb-2 mb20">
            <label for="estatus" class="form-label">{{ __('Estatus') }}</label>
            <input type="text" name="estatus" class="form-control @error('estatus') is-invalid @enderror" value="{{ old('estatus', $reserva?->estatus) }}" id="estatus" placeholder="Estatus">
            {!! $errors->first('estatus', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>