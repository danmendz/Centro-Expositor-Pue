
    <h1>Reservar cajon</h1>
    <span><br></span>
    <input type="hidden" name="id" value="0">
    <input type="hidden" name="id_persona" value="{{ Auth::user()->id }}">
    <input type="hidden" name="id_cajon" value="{{ $id_cajon }}">

    <label class="control-label">Duración de la reserva:</label>
    <div class="row g-2">
        <div class="col-md">
            <div class="form-floating">
                <input type="date" name="fecha" class="form-control" id="floatingInputGrid" required>
                <label for="floatingInputGrid">Fecha de inicio</label>
            </div>
        </div>
    </div>

    <div class="row g-2">
        <div class="col-md">
            <div class="form-floating">
                <input type="time" name="inicio" class="form-control" id="floatingInputGrid" required>
                <label for="floatingInputGrid">Hora de inicio</label>
            </div>
        </div>

        <div class="col-md">
            <div class="form-floating">
                <input type="time" name="fin" class="form-control" id="floatingInputGrid" required>
                <label for="floatingInputGrid">Hora de finalización</label>
            </div>
        </div>
    </div>

    <div class="button-container">
        <button type="submit" class="btn btn-primary" role="button">Reservar</button>
    </div>