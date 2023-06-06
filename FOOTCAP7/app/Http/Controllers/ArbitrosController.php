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
        $request->validate([
            'nombre' =>  'required|regex:/^[a-zA-Z\s]+$/|min:3|max:25',
            'apellido_1' => 'required|string|max:255',
            'apellido_2' => 'required|string|max:255',
            'email' => 'required|email|unique:arbitros,email|max:255',
            'telefono' => 'required|unique:arbitros,telefono|regex:/^[0-9]{9}$/',
            'experiencia' => 'required|string|max:255',
            'disponibilidad' => 'required',
        ]);
        
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
        $arbitro = Arbitro::find($id);

        return view('arbitros/edit',
            [
                'arbitro' => $arbitro
            ]
        );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $arbitro = Arbitro::find($id);


        $arbitro->nombre = $request->input('nombre');
        $arbitro->apellido_1 = $request->input('apellido_1');
        $arbitro->apellido_2 = $request->input('apellido_2');
        $arbitro->email = $request->input('email');
        $arbitro->telefono = $request->input('telefono');
        $arbitro->experiencia = $request->input('experiencia');
        $arbitro->disponibilidad = $request->input('disponibilidad');
        $arbitro->save();
        return redirect('arbitros');
    }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $arbitro = Arbitro::find($id);
        $arbitro->delete();
        return redirect()->route('arbitros.index');
    }
}
