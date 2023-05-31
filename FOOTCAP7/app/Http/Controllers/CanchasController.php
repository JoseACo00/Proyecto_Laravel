<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cancha;
use DB;
use Symfony\Component\Console\Input\Input;


class CanchasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $mensaje = "Está es la lista de canchas";
       /**  $canchas = [
            ["El pozuelo","Torremolinos", 45],
            ["El benamiel","Arroyo de la miel", 50],
            ["El conejito","Málaga", 40],
            ["El palo", "Málaga", 50]
        ];*/
        //Con esto cogemos todos los canchas que esten en la base de datos
        $canchas = Cancha::all();

        return view('canchas/index', 
        [
            'mensaje' => $mensaje,
            'canchas' => $canchas

        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('canchas/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $cancha = new Cancha;
        $cancha -> nombre = $request ->input('nombre');
        $cancha -> localidad = $request ->input('localidad');
        $cancha -> direccion = $request ->input('direccion');
        $cancha -> precio = $request ->input('precio');
        if ($request->hasFile('foto')) {
            $uploadedImage = $request->file('foto');
            $imagePath = $uploadedImage->store('imagenes/canchas', 'public');
            $cancha->foto = $imagePath;
        }
        $cancha -> disponibilidad = $request ->input('disponibilidad');
        $cancha -> save();

        return redirect('canchas');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $cancha = Cancha::find($id);
        return view('canchas/show', 
        [
            'cancha' => $cancha
        ]
        );
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $cancha = Cancha::find($id);

        return view('canchas/edit',
            [
                'cancha' => $cancha
            ]
        );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $cancha = Cancha::find($id);

        $cancha -> nombre = $request -> input('nombre');
        $cancha -> localidad = $request -> input('localidad');
        $cancha -> direccion = $request ->input('direccion');
        $cancha -> precio = $request -> input('precio');
        if ($request->hasFile('foto')) {
            $uploadedImage = $request->file('foto');
            $imagePath = $uploadedImage->store('imagenes/canchas', 'public');
            $cancha->foto = $imagePath;
        }
        $cancha -> disponibilidad = $request -> input('disponibilidad');

        $cancha -> save();

        return redirect('canchas');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        DB::table('canchas')->where('id','=', $id)->delete();
        
        return redirect('canchas');
    }
}
