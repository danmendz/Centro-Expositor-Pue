<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ReservacionCajon
 *
 * @property $id
 * @property $fecha
 * @property $inicio
 * @property $fin
 * @property $estatus
 * @property $id_usuario
 * @property $id_cajon
 * @property $created_at
 * @property $updated_at
 *
 * @property Cajon $cajon
 * @property User $user
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class ReservacionCajon extends Model
{
    

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['fecha', 'inicio', 'fin', 'estatus', 'id_usuario', 'id_cajon'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function cajon()
    {
        return $this->belongsTo(\App\Models\Cajon::class, 'id_cajon', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(\App\Models\User::class, 'id_usuario', 'id');
    }
    

}
