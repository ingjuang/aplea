<?php

// use App\Models\Empleados;
// use Illuminate\Http\Request;

namespace App\Http\Controllers;

use App\Models\Empleados;
use Illuminate\Http\Request;
use Laravel\Lumen\Routing\Controller as BaseController;

class EmpleadoController extends BaseController
{
    public function store(Request $request){
        $this->validate($request, array(
            'nombres' => 'required',
            'apellidos' => 'required',
            'num_iden' => 'required',
            'tipo_iden' => 'required',
            'fecha_nac' => 'required',
            'correo' => 'required',
            'telefono' => 'required',
            'tipo_empleado' => 'required',
            'fotoPerfil' => 'required',
        ));

        $empleado = new Empleados();
        $empleado->nombres = $request->get('nombres');
        $empleado->apellidos = $request->get('apellidos');
        $empleado->num_iden = $request->get('num_iden');
        $empleado->tipo_iden = $request->get('tipo_iden');
        $empleado->fecha_nac = $request->get('fecha_nac');
        $empleado->correo = $request->get('correo');
        $empleado->telefono = $request->get('telefono');
        $empleado->tipo_empleado = $request->get('tipo_empleado');
        $empleado->fotoPerfil = $request->get('fotoPerfil');
        $empleado->save();

        return response()->json($empleado, 201);
    }
}
