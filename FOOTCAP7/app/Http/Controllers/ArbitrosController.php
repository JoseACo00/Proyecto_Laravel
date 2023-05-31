<?php

namespace App\Http\Controllers;

use App\Models\Arbitro;
use Illuminate\Http\Request;

class ArbitrosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $mensaje = "Está es la lista de arbitros";
        //Con esto cogemos todos los canchas que esten en la base de datos
        $arbitros = Arbitro::all();

        return view('arbitros/index', 
        [
            'mensaje' => $mensaje,
            'arbitros' => $arbitros

        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('arbitros/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $arbitro = new Arbitro();
        $arbitro-> nombre = $request->input('nombre');
        $arbitro-> apellido_1 = $request->input('apellido_1');
        $arbitro-> apellido_2 = $request->input('apellido_2');
        $arbitro-> email = $request->input('email');
        $arbitro-> telefono = $request->input('telefono');
        $arbitro-> experiencia = $request->input('experiencia');
        $arbitro-> disponibilidad = $request->input('disponibilidad');
        $arbitro->save();
        return redirect('arbitros');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $arbitro = Arbitro::find($id);
        return view('arbitros/show', 
        [
            'arbitro' => $arbitro
        ]
        );
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
