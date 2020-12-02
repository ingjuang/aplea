<?php

namespace App\Http\Controllers;

use App\Models\Actividades;
use Illuminate\Http\Request;
use Laravel\Lumen\Routing\Controller as BaseController;

class ActividadController extends BaseController
{
    public function store(Request $request){
        $this->validate($request, array(
            'nombre'=> 'required',
            'descripcion'=>'required',
            'fecha_inicio'=>'required',
            'fecha_fin'=>'required',
            'alto'=> 'required',
            'ancho'=>'required',
            'largo'=>'required',
            'unidad_medida'=>'required',
            'id_encargado'=>'required',
        ));

        $actividad = new Actividades();
        $actividad->nombre = $request->get('nombre');
        $actividad->descripcion = $request->get('descripcion');
        $actividad->fecha_inicio = $request->get('fecha_inicio');
        $actividad->fecha_fin = $request->get('fecha_fin');
        $actividad->alto = $request->get('alto');
        $actividad->ancho = $request->get('ancho');
        $actividad->largo = $request->get('largo');
        $actividad->unidad_medida = $request->get('unidad_medida');
        $actividad->id_encargado = $request->get('id_encargado');
        $actividad->save();

        return response()->json($actividad, 201);
    }}
