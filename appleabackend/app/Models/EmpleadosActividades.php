<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class EmpleadosActividades extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'id_empleado', 'id_actividad'
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
