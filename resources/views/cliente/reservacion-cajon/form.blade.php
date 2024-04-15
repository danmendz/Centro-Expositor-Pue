<input type="hidden" name="estatus" value="0">
    <input type="hidden" name="id_usuario" value="{{ Auth::user()->id }}">
    <input type="hidden" name="id_cajon" value="{{ $id_cajon }}">

    <div class="mb-3">
        <label class="form-label">Duración de la reserva:</label>
        <div class="row g-3">
            <div class="col-md-6">
                <div class="input-group">
                    <label class="input-group-text" for="fecha"><i class="bi bi-calendar"></i> Fecha</label>
                    <input type="date" name="fecha" class="form-control" id="fecha" required>
                </div>
            </div>
            <div class="col-md-3">
                <div class="input-group">
                    <label class="input-group-text" for="inicio"><i class="bi bi-clock"></i> Hora de inicio</label>
                    <input type="time" name="inicio" class="form-control" id="inicio" required>
                </div>
            </div>
            <div class="col-md-3">
                <div class="input-group">
                    <label class="input-group-text" for="fin"><i class="bi bi-clock"></i> Hora final</label>
                    <input type="time" name="fin" class="form-control" id="fin" required>
                </div>
            </div>
        </div>
    </div>

    <div class="d-grid">
        <button type="submit" class="btn btn-primary" style="background-color: #0b5ed7; border-color: white">Reservar</button>
    </div>