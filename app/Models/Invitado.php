<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Invitado
 *
 * @property $id
 * @property $estatus
 * @property $id_usuario
 * @property $id_evento
 * @property $id_area
 * @property $created_at
 * @property $updated_at
 *
 * @property Area $area
 * @property Evento $evento
 * @property User $user
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Invitado extends Model
{
    

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['estatus', 'id_usuario', 'id_evento', 'id_area'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function area()
    {
        return $this->belongsTo(\App\Models\Area::class, 'id_area', 'id');
    }
    
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
    public function user()
    {
        return $this->belongsTo(\App\Models\User::class, 'id_usuario', 'id');
    }
    

}
