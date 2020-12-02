<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Actividad extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'nombre', 'descripcion', 'fechaInicio', 'fechaFin', 'alto', 'ancho', 'largo', 'unidadMedida', 'encargado'
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
