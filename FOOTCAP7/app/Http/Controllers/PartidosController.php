<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reserva;
use App\Models\Cancha;
use App\Models\User;
use App\Models\Partido;

class PartidosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $mensaje = "Esta es la lista de PARTIDOS";
        $reservas = Reserva::all();
        $users = User::all();
        $canchas = Cancha::all();
        $partidos = Partido::all();
    
        return view('partidos.index', compact('mensaje', 'reservas', 'users', 'canchas', 'partidos', ));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $users = User::all();
        $canchas = Cancha::all();
        $reservas = Reserva::all();

    return view('partidos.create', compact('users', 'canchas', 'reservas'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $partido = new Partido();
        $partido->user_id = $request->user_id;
        $partido->cancha_id = $request->cancha_id;
        $partido->reserva_id = $request->reserva_id;
        $partido->arbitro = $request->has('arbitro');
        $partido->estado = $request->estado;
        $partido->save();

         // Redireccionar a la página de visualización del partido creado
         return redirect()->route('partidos.index') ->with('success', 'Partido fue  creada exitosamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $partido = Partido::find($id);
        return view('partidos/show', 
        [
            'partido' => $partido
        ]
        );
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $partido = Partido::findOrFail($id);
        $users = User::all();
        $canchas = Cancha::all();
        $reservas = Reserva::all();

    return view('partidos.edit', compact('partido', 'users', 'canchas', 'reservas'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $partido = Partido::find($id);
        $partido->user_id = $request->input('user_id');
        $partido->cancha_id = $request->input('cancha_id');
        $partido->reserva_id = $request->input('reserva_id');
        $partido->arbitro = $request->input('arbitro', false);
        $partido->estado = $request->input('estado');

        $partido->save();

        return redirect('partidos')->with('success', 'El partido se ha actualizado correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
