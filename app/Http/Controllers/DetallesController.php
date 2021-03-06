<?php

namespace App\Http\Controllers;

use App\Detalles;
use Illuminate\Http\Request;

class DetallesController extends Controller
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
    public function store($peso, $ce, $sa, $observaciones)
    {
        $Detalles = new Detalles;
        $Detalles->peso = $peso;
        $Detalles->ce = $ce;
        $Detalles->sa= $sa;
        $Detalles->observaciones= $observaciones;
        $Detalles->save();
        return 'La Inspeccion se ha agregado con éxito';
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Detalles  $detalles
     * @return \Illuminate\Http\Response
     */
    public function show(Detalles $detalles)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Detalles  $detalles
     * @return \Illuminate\Http\Response
     */
    public function edit(Detalles $detalles)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Detalles  $detalles
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Detalles $detalles)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Detalles  $detalles
     * @return \Illuminate\Http\Response
     */
    public function destroy(Detalles $detalles)
    {
        //
    }
}
