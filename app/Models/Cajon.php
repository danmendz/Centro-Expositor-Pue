<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Cajon
 *
 * @property $id
 * @property $numero
 * @property $estatus
 * @property $id_area
 * @property $created_at
 * @property $updated_at
 *
 * @property Area $area
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Cajon extends Model
{
    

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['numero', 'estatus', 'id_area'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function area()
    {
        return $this->belongsTo(\App\Models\Area::class, 'id_area', 'id');
    }
    

}
