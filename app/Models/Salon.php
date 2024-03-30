<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Salon
 *
 * @property $id
 * @property $nombre
 * @property $capacidad
 * @property $precio
 * @property $tamano
 * @property $direccion
 * @property $estatus
 * @property $created_at
 * @property $updated_at
 *
 * @property Area[] $areas
 * @property Evento[] $eventos
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Salon extends Model
{
    

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre', 'capacidad', 'precio', 'tamano', 'direccion', 'estatus'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function areas()
    {
        return $this->hasMany(\App\Models\Area::class, 'id', 'id_salon');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function eventos()
    {
        return $this->hasMany(\App\Models\Evento::class, 'id', 'id_salon');
    }
    

}
