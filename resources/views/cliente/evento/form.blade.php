<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="nombre" class="form-label">{{ __('Nombre') }}</label>
            <input type="text" name="nombre" class="form-control @error('nombre') is-invalid @enderror" value="{{ old('nombre', $evento?->nombre) }}" id="nombre" placeholder="Nombre">
            {!! $errors->first('nombre', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="tipo" class="form-label">{{ __('Tipo') }}</label>
            <input type="text" name="tipo" class="form-control @error('tipo') is-invalid @enderror" value="{{ old('tipo', $evento?->tipo) }}" id="tipo" placeholder="Tipo">
            {!! $errors->first('tipo', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>     

        <div class="form-group mb-2 mb20">
            <label for="asistentes" class="form-label">{{ __('Asistentes') }}</label>
            <input type="text" name="asistentes" class="form-control @error('asistentes') is-invalid @enderror" value="{{ old('asistentes', $evento?->asistentes) }}" id="asistentes" placeholder="Asistentes">
            {!! $errors->first('asistentes', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

        <div class="form-group mb-2 mb20">
            <label for="acceso" class="form-label">{{ __('Acceso') }}</label>
            <input type="text" name="acceso" class="form-control @error('acceso') is-invalid @enderror" value="{{ old('acceso', $evento?->acceso) }}" id="acceso" placeholder="Acceso">
            {!! $errors->first('acceso', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

        <div class="form-group mb-2 mb20">
            <label for="fecha_inicio" class="form-label">{{ __('Fecha Inicio') }}</label>
            <input type="date" name="fecha_inicio" class="form-control @error('fecha_inicio') is-invalid @enderror" value="{{ old('fecha_inicio', $evento?->fecha_inicio) }}" id="fecha_inicio" placeholder="Fecha Inicio">
            {!! $errors->first('fecha_inicio', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="fecha_fin" class="form-label">{{ __('Fecha Fin') }}</label>
            <input type="date" name="fecha_fin" class="form-control @error('fecha_fin') is-invalid @enderror" value="{{ old('fecha_fin', $evento?->fecha_fin) }}" id="fecha_fin" placeholder="Fecha Fin">
            {!! $errors->first('fecha_fin', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="hora_inicio" class="form-label">{{ __('Hora Inicio') }}</label>
            <input type="time" name="hora_inicio" class="form-control @error('hora_inicio') is-invalid @enderror" value="{{ old('hora_inicio', $evento?->hora_inicio) }}" id="hora_inicio" placeholder="Hora Inicio">
            {!! $errors->first('hora_inicio', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="hora_fin" class="form-label">{{ __('Hora Fin') }}</label>
            <input type="time" name="hora_fin" class="form-control @error('hora_fin') is-invalid @enderror" value="{{ old('hora_fin', $evento?->hora_fin) }}" id="hora_fin" placeholder="Hora Fin">
            {!! $errors->first('hora_fin', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

        <div class="form-group mb-2 mb20">
            <input type="hidden" name="id_usuario" value="{{ Auth::user()->id }}">
        </div>        
        
        {{-- <div class="form-group mb-2 mb20">
            <label for="id_usuario" class="form-label">{{ __('Id Usuario') }}</label>
            <input type="text" name="id_usuario" class="form-control @error('id_usuario') is-invalid @enderror" value="{{ old('id_usuario', $evento?->id_usuario) }}" id="id_usuario" placeholder="Id Usuario">
            {!! $errors->first('id_usuario', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div> --}}

        {{-- <div class="form-group mb-2 mb20">
            <label for="id_salon" class="form-label">{{ __('Id Salon') }}</label>
            <input type="text" name="id_salon" class="form-control @error('id_salon') is-invalid @enderror" value="{{ old('id_salon', $evento?->id_salon) }}" id="id_salon" placeholder="Id Salon">
            {!! $errors->first('id_salon', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>         --}}
        
        <div class="form-group mb-2 mb20">
            <label for="id_salon" class="form-label">{{ __('Salon') }}</label>
            <select name="id_salon" class="form-control @error('id_salon') is-invalid @enderror" id="id_salon">
                @foreach($salones as $salon)
                    <option value="{{ $salon->id }}">{{ $salon->nombre }} (Capacidad: {{ $salon->capacidad }})</option>
                @endforeach
            </select>
            {!! $errors->first('id_salon', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

        <div class="form-group mb-2 mb20">
            <label for="comentarios" class="form-label">{{ __('Comentarios') }}</label>
            <textarea name="comentarios" class="form-control @error('comentarios') is-invalid @enderror" id="comentarios" placeholder="Comentarios">{{ old('comentarios', $evento?->comentarios) }}</textarea>
            {!! $errors->first('comentarios', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        
    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>