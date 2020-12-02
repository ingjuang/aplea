<?php

namespace App\Http\Controllers;

use App\Models\EmpleadosActividades;
use Illuminate\Http\Request;
use Laravel\Lumen\Routing\Controller as BaseController;



class ActividadEmpleadoController extends BaseController
{
    public function store(Request $request){
        $this->validate($request, array(
            'id_actividad'=> 'required',
            'id_empleado'=>'required',
        ));

        $actEmp = new EmpleadosActividades();
        $actEmp->id_actividad = $request->get('id_actividad');
        $actEmp->id_empleado = $request->get('id_empleado');
        $actEmp->save();

        return response()->json($actEmp, 201);
    }
}
