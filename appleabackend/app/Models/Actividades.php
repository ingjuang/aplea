<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Actividades extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'nombre', 'descripcion', 'fecha_inicio', 'fecha_fin', 'alto', 'ancho', 'largo', 'unidad_medida', 'id_encargado'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        'create_at','updated_at',
    ];
}
