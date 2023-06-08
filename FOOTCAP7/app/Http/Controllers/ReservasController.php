<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reserva;
use App\Models\Cancha;
use App\Models\User;


class ReservasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        $mensaje = "Esta es la lista de Reservas";
        $reservas = Reserva::all();
        $users = User::all();
        $canchas = Cancha::all();
    
        return view('reservas.index', compact('mensaje', 'reservas', 'users', 'canchas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $users = User::all();
        $canchas = Cancha::all();

        return view('reservas.create', compact('users', 'canchas'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            
            'fecha_reserva' => 'required|date|unique:reservas,fecha_reserva,NULL,id,cancha_id,' . $request->cancha_id,
            'hora_inicio_reserva' => 'required|date_format:H:i',
            'hora_fin_reserva' => 'required|date_format:H:i|after:hora_inicio_reserva',
            'arbitro' => 'required',
            'metodo_pago' => 'required|in:Metalico,Transferencia bancaria,Bizum',
            'comprobante_pago' => 'nullable|max:2048',
        
       
    ]);
        $reserva = new Reserva();
        $reserva->user_id = $request->user_id;
        $reserva->cancha_id = $request->cancha_id;
        $reserva->fecha_reserva = $request->input('fecha_reserva');
        $reserva->hora_inicio_reserva = $request->input('hora_inicio_reserva');
        $reserva->hora_fin_reserva = $request->input('hora_fin_reserva');
        $reserva->arbitro = $request->has('arbitro');
        $reserva->metodo_pago = $request->input('metodo_pago');
        $reserva->comprobante_pago = $request->comprobante_pago;
        if ($request->hasFile('comprobante_pago')) {
            $uploadedImage = $request->file('comprobante_pago');
            $path = $uploadedImage->store('users/comprobantes', 'public');
            $reserva->comprobante_pago = $path;
        }
        $reserva->save();

        return redirect()->route('reservas.index')->with('success', 'Reserva creada exitosamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $reserva = Reserva::find($id);
        return view('reservas/show', 
        [
            'reserva' => $reserva
        ]
        );
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $reserva = Reserva::find($id);
        $users = User::all();
        $canchas = Cancha::all();
    
        return view('reservas.edit', compact('reserva', 'users', 'canchas'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $reserva = Reserva::find($id);
        $reserva->user_id = $request->user_id;
        $reserva->cancha_id = $request->cancha_id;
        $reserva->fecha_reserva = $request->input('fecha_reserva');
        $reserva->hora_inicio_reserva = $request->input('hora_inicio_reserva');
        $reserva->hora_fin_reserva = $request->input('hora_fin_reserva');
        $reserva->arbitro = $request->has('arbitro');
        $reserva->metodo_pago = $request->input('metodo_pago');
        $reserva->comprobante_pago = $request->comprobante_pago;
        if ($request->hasFile('comprobante_pago')) {
            $uploadedImage = $request->file('comprobante_pago');
            $path = $uploadedImage->store('users/comprobantes', 'public');
            $reserva->comprobante_pago = $path;
        }
        $reserva->save();
    
        return redirect()->route('reservas.index')->with('success', 'Reserva actualizada exitosamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $reserva = Reserva::find($id);
        $reserva->delete();
        return redirect()->route('reservas.index');
    

    }
}
