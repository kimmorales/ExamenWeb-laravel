<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
USE DB;

class ClientesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


        $clientes = DB::table('cliente')->get();

        return view('clientes/index', ['clientes' => $clientes]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $fecha = date("Y-m-d");
        DB::table('cliente')->insert([
                'Cedula' => $request->cedula,
                'Nombre' => $request->Nombre,
                'Apellido' => $request->Apellido,
                'FechaNacimiento' => $request->Nacimiento,
                'Dirección' => $request->Direccion,
                'EstadoCivil' => $request->Estado,
                'Sexo' => $request->Sexo,
                'FechaIngreso' => $fecha,
                'Tipo' => $request->Tipo,
                'Descuento' => $request->Descuento
            ]);
        $clientes = DB::table('cliente')->get();

        return view('clientes/index', ['clientes' => $clientes]);
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = DB::table('cliente')->where('Cedula', $id)->first();
        return view('clientes/show', ['cliente' => $user]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('cliente')->where('Cedula', $id)->delete();

        $clientes = DB::table('cliente')->get();

        return view('clientes/index', ['clientes' => $clientes]);
    }
}
