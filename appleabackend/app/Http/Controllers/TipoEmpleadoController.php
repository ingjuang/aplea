<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Laravel\Lumen\Routing\Controller as BaseController;

class TipoEmpleadoController extends BaseController
{
    public function index(Request $request){

        $nombre = $request->get('nombre');
        $tipoEmpleado = DB::table('tipos_empleados');
        if(isset($nombre)){
            $tipoEmpleado = $tipoEmpleado;
        }
       return $tipoEmpleado->get();
    }

}
