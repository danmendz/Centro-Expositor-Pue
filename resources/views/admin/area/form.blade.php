<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="nombre" class="form-label">{{ __('Nombre') }}</label>
            <input type="text" name="nombre" class="form-control @error('nombre') is-invalid @enderror" value="{{ old('nombre', $area?->nombre) }}" id="nombre" placeholder="Nombre">
            {!! $errors->first('nombre', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="capacidad" class="form-label">{{ __('Capacidad') }}</label>
            <input type="text" name="capacidad" class="form-control @error('capacidad') is-invalid @enderror" value="{{ old('capacidad', $area?->capacidad) }}" id="capacidad" placeholder="Capacidad">
            {!! $errors->first('capacidad', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

        <div class="form-group mb-2 mb20">
            <label for="id_evento" class="form-label">{{ __('Evento') }}</label>
            <select name="id_evento" class="form-control @error('id_evento') is-invalid @enderror" id="id_evento">
                <option value="" {{ old('id_evento', $area->id_evento ?? null) == null ? 'selected' : '' }}>Seleccionar evento...</option>
                @foreach($eventos as $evento)
                    <option value="{{ $evento->id }}" {{ old('id_evento', $area->id_evento ?? null) == $evento->id ? 'selected' : '' }}>
                        {{ $evento->nombre }}
                    </option>
                @endforeach
            </select>
            {!! $errors->first('id_evento', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="id_salon" class="form-label">{{ __('Id Salon') }}</label>
            <select name="id_salon" class="form-control @error('id_salon') is-invalid @enderror" id="id_salon">
                <option value="" {{ old('id_salon', $area->id_salon ?? null) == null ? 'selected' : '' }}>Seleccionar salón...</option>
                @foreach($salones as $salon)
                    <option value="{{ $salon->id }}" {{ old('id_salon', $area->id_salon ?? null) == $salon->id ? 'selected' : '' }}>
                        {{ $salon->nombre }}
                    </option>
                @endforeach
            </select>
            {!! $errors->first('id_salon', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

        {{-- <div class="form-group mb-2 mb20">
            <label for="id_salon" class="form-label">{{ __('Salon') }}</label>
            <select name="id_salon" class="form-control @error('id_salon') is-invalid @enderror" id="id_salon">
                <option value="" {{ old('id_salon', $selectedSalonId ?? null) == null ? 'selected' : '' }}>Seleccionar salon...</option>
                @foreach($salones as $salonId => $salonOption)
                    <option value="{{ $salonId }}" {{ old('id_salon', $selectedSalonId ?? null) == $salonId ? 'selected' : '' }}>
                        {{ $salonOption->nombre }} (Capacidad: {{ $salonOption->capacidad }})
                    </option>
                @endforeach
            </select>
            {!! $errors->first('id_salon', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>                 --}}
        {{-- <div class="form-group mb-2 mb20">
            <label for="id_evento" class="form-label">{{ __('Id Evento') }}</label>
            <input type="text" name="id_evento" class="form-control @error('id_evento') is-invalid @enderror" value="{{ old('id_evento', $area?->id_evento) }}" id="id_evento" placeholder="Id Evento">
            {!! $errors->first('id_evento', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
         --}}
        {{-- <div class="form-group mb-2 mb20">
            <label for="id_salon" class="form-label">{{ __('Id Salon') }}</label>
            <input type="text" name="id_salon" class="form-control @error('id_salon') is-invalid @enderror" value="{{ old('id_salon', $area?->id_salon) }}" id="id_salon" placeholder="Id Salon">
            {!! $errors->first('id_salon', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div> --}}
    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>