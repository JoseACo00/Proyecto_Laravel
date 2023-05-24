<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clientes = [
            ["Daniel Rojo Diaz","danielwa@gmail.com"," Málaga"],
            ["Ramon Jimines Ruiz","ramon@gmail.com","Málaga"],
            ["Luis Rojo Caceres","ramon@gmail.com","Málaga"]
        ];

        $mensaje = "Aquí tenemos un listado de clientes";
        return view ('clientes/index',
        [
            "clientes" => $clientes,
            "mensaje" => $mensaje
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('clientes/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
