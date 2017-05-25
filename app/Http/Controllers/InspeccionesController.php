<?php

namespace App\Http\Controllers;

use App\Inspecciones;
use Illuminate\Http\Request;

class InspeccionesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store($fecha,$finca_id, $num_visita)
    {
        $Inspecciones = new Inspecciones;
        $Inspecciones->fecha = $fecha;
        $Inspecciones->finca_id = $finca_id;
        $Inspecciones->num_visita= $num_visita;
        $Inspecciones->save();
        return 'La Inspeccion se ha agregado con éxito';
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Inspecciones  $inspecciones
     * @return \Illuminate\Http\Response
     */
    public function show(Inspecciones $inspecciones)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Inspecciones  $inspecciones
     * @return \Illuminate\Http\Response
     */
    public function edit(Inspecciones $inspecciones)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Inspecciones  $inspecciones
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Inspecciones $inspecciones)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Inspecciones  $inspecciones
     * @return \Illuminate\Http\Response
     */
    public function destroy(Inspecciones $inspecciones)
    {
        //
    }
}
