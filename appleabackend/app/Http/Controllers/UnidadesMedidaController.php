<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Laravel\Lumen\Routing\Controller as BaseController;

class UnidadesMedidaController extends BaseController
{
    public function index(Request $request){

        $nombre = $request->get('nombre');
        $unidadesMedida = DB::table('unidades_medida');
        if(isset($nombre)){
            $unidadesMedida = $unidadesMedida;
        }
       return $unidadesMedida->get();
    }

}
