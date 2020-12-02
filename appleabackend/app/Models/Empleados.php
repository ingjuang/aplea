<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Empleados extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id','nombres', 'apellidos', 'num_iden', 'tipo_iden', 'fecha_nac', 'correo', 'telefono', 'tipo_empleado', 'fotoPerfil'
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
