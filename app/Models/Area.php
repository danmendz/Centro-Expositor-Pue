<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

/**
 * Class Area
 *
 * @property $id
 * @property $nombre
 * @property $capacidad
 * @property $id_evento
 * @property $id_salon
 * @property $created_at
 * @property $updated_at
 *
 * @property Evento $evento
 * @property Salon $salon
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Area extends Model
{
    

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre', 'capacidad', 'id_evento', 'id_salon'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function evento()
    {
        return $this->belongsTo(\App\Models\Evento::class, 'id_evento', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function salon()
    {
        return $this->belongsTo(\App\Models\Salon::class, 'id_salon', 'id');
    }

    public function asignarArea($idEvento)
    {
        $area = new Area();
        $area->id_evento = $idEvento;
        $area->save();
    }
    

}
