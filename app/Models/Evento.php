<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Evento
 *
 * @property $id
 * @property $nombre
 * @property $tipo
 * @property $asistentes
 * @property $acceso
 * @property $comentarios
 * @property $fecha_inicio
 * @property $fecha_fin
 * @property $hora_inicio
 * @property $hora_fin
 * @property $estatus
 * @property $id_usuario
 * @property $id_salon
 * @property $created_at
 * @property $updated_at
 *
 * @property Salon $salon
 * @property User $user
 * @property Area[] $areas
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Evento extends Model
{
    

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre', 'tipo', 'asistentes', 'acceso', 'comentarios', 'fecha_inicio', 'fecha_fin', 'hora_inicio', 'hora_fin', 'estatus', 'id_usuario', 'id_salon'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function salon()
    {
        return $this->belongsTo(\App\Models\Salon::class, 'id_salon', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(\App\Models\User::class, 'id_usuario', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function areas()
    {
        return $this->hasMany(\App\Models\Area::class, 'id', 'id_evento');
    }
    
    public function reserva()
    {
        return $this->hasOne(Reserva::class, 'id_evento');
    }

    public static function obtenerEventosUsuario($id)
    {
        return Evento::select('eventos.*', 'salones.nombre AS salon_nombre')
        ->join('salones', 'salones.id', '=', 'eventos.id_salon')
        ->where('eventos.id_persona', $id)
        ->where('eventos.estatus', 'aprobado')
        ->get();
    }

}
