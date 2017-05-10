<?php

namespace App\Http\Controllers;

use App\animales;
use Illuminate\Http\Request;

class AnimalesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return animales::all();
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
     * @param  \App\animales  $animales
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        return 'hola';///animales::all();///->email == $email;//find($email);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\animales  $animales
     * @return \Illuminate\Http\Response
     */
    public function edit(animales $animales)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\animales  $animales
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, animales $animales)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\animales  $animales
     * @return \Illuminate\Http\Response
     */
    public function destroy(animales $animales)
    {
        //
    }
}
