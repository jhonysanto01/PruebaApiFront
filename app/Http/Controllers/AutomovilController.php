<?php

namespace App\Http\Controllers;

use App\Models\automovil;
use Illuminate\Http\Request;

class AutomovilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /* se llama al modelo */
        $automoviles = automovil::all();
        return $automoviles;
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
        $automovil = new automovil();
        $automovil->marca = $request->marca;
        $automovil->modelo = $request->modelo;
        $automovil->color = $request->color;
        $automovil->placa = $request->placa;
        $automovil->save();
        $automoviles = automovil::all();
        return $automoviles;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\automovil  $automovil
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $automovil = automovil::find($id);
        return $automovil;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\automovil  $automovil
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\automovil  $automovil
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $automovil = automovil::find($id);
        $automovil->marca = $request->marca;
        $automovil->modelo = $request->modelo;
        $automovil->color = $request->color;
        $automovil->placa = $request->placa;
        $automovil->save();
        /* toca agregar este para que tome toda la informacion */
        $automoviles = automovil::all();
        return $automoviles;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\automovil  $automovil
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $automovil = automovil::find($id);
        $automovil->delete();
    }
}
