<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="fecha" class="form-label">{{ __('Fecha') }}</label>
            <input type="text" name="fecha" class="form-control @error('fecha') is-invalid @enderror" value="{{ old('fecha', $reservacionCajon?->fecha) }}" id="fecha" placeholder="Fecha">
            {!! $errors->first('fecha', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="inicio" class="form-label">{{ __('Inicio') }}</label>
            <input type="text" name="inicio" class="form-control @error('inicio') is-invalid @enderror" value="{{ old('inicio', $reservacionCajon?->inicio) }}" id="inicio" placeholder="Inicio">
            {!! $errors->first('inicio', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="fin" class="form-label">{{ __('Fin') }}</label>
            <input type="text" name="fin" class="form-control @error('fin') is-invalid @enderror" value="{{ old('fin', $reservacionCajon?->fin) }}" id="fin" placeholder="Fin">
            {!! $errors->first('fin', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="estatus" class="form-label">{{ __('Estatus') }}</label>
            <input type="text" name="estatus" class="form-control @error('estatus') is-invalid @enderror" value="{{ old('estatus', $reservacionCajon?->estatus) }}" id="estatus" placeholder="Estatus">
            {!! $errors->first('estatus', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="id_usuario" class="form-label">{{ __('Id Usuario') }}</label>
            <input type="text" name="id_usuario" class="form-control @error('id_usuario') is-invalid @enderror" value="{{ old('id_usuario', $reservacionCajon?->id_usuario) }}" id="id_usuario" placeholder="Id Usuario">
            {!! $errors->first('id_usuario', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="id_cajon" class="form-label">{{ __('Id Cajon') }}</label>
            <input type="text" name="id_cajon" class="form-control @error('id_cajon') is-invalid @enderror" value="{{ old('id_cajon', $reservacionCajon?->id_cajon) }}" id="id_cajon" placeholder="Id Cajon">
            {!! $errors->first('id_cajon', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>