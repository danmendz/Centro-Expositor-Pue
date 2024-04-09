<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Reserva
 *
 * @property $id
 * @property $id_evento
 * @property $estatus
 * @property $created_at
 * @property $updated_at
 *
 * @property Evento $evento
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Reserva extends Model
{
    

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_evento', 'estatus'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function evento()
    {
        return $this->belongsTo(\App\Models\Evento::class, 'id_evento', 'id');
    }

    public function insertaRegistro($idEvento)
    {
        $reserva = new Reserva();
        $reserva->id_evento = $idEvento;
        $reserva->save();
    }
    

}
