<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{

    public function register(Request $request){
        //Validacion de datos del usser
        $request->validate([
            'name' => 'required|regex:/^[a-zA-Z\s]+$/|min:3|max:25',
            'apellido_1' => 'required|regex:/^[a-zA-Z\s]+$/|min:3|max:25',
            'apellido_2' => 'required|regex:/^[a-zA-Z\s]+$/|min:3|max:25',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:5',
            'edad' => 'required|numeric|min:16|max:90',
            'telefono' => 'required|regex:/^[0-9]{9}$/|unique:users,telefono',
        ]);
        
         
        $user = new User();
        $user ->name = $request->name;
        $user ->apellido_1 = $request->apellido_1;
        $user ->apellido_2 = $request->apellido_2;
        $user ->email = $request->email;
        $user ->password = Hash::make($request->password);
        $user ->edad = $request->edad;
        $user ->telefono = $request->telefono;
        $user ->type = $request->type;
        
        $user->save();
        Auth::login($user);
        return redirect(route('dashboard'));
    }

    public function login(Request $request){

        $credentials = [
            "email" => $request->email,
            "password" => $request->password,
        ];

        $remember = ($request->has('remember') ? true : false);

        if(Auth::attempt($credentials,$remember)){
            $request->session()->regenerate();
            $user = Auth::user();

            if($user->type === 'admin'){
                return redirect()->intended(route('dashboard'));
            } else {
                return redirect()->intended(route('dashboard'));
            }
        } else {
            return redirect('login');
        }
    }
    

    public function logout(Request $request){
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect(route('login'));
    }
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
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

    /**
     * Display a listing of the resource.
     */
    

