<?php

namespace App\Http\Controllers;

use App\Fincas;
use Illuminate\Http\Request;

class FincasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return fincas::all();
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Fincas  $fincas
     * @return \Illuminate\Http\Response
     */
    public function show(Fincas $fincas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Fincas  $fincas
     * @return \Illuminate\Http\Response
     */
    public function edit(Fincas $fincas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Fincas  $fincas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Fincas $fincas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Fincas  $fincas
     * @return \Illuminate\Http\Response
     */
    public function destroy(Fincas $fincas)
    {
        //
    }
}
