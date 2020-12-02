<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id','nombres', 'apellidos', 'numIden', 'tipoIden', 'fechaNac', 'correo', 'telefono', 'tipoEmpleado', 'fotoPerfil'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        'create_at','updated_at'
    ];
}
