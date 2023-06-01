<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\CanchasController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArbitrosController;
use App\Http\Controllers\PartidosController;
use App\Http\Controllers\ReservasController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('inicio');
});

    //Con los controllers se pueden generar rutas automaticamente , haciendolas más fácil y no tener que estar creaando cada ruta para edit, index, update ...

  /** Route::get('/canchas/info', function () {
    return view('canchas/info');
});

Route::get('/canchas', 
    [CanchasController::class, 'index']);
Route::get('/canchas/create', 
    [CanchasController::class, 'create']);
Route::get('/canchas/create',
    [CanchasController::class, 'create']); */

    Route::view('/login', "login")->name('login');

    Route::view('/registro', "register")->name('registro');
    
    Route::view('/privada', "secret")->middleware('auth')->name('privada');
    
    
    Route::post('/validar-registro',[LoginControLLer::class, 'register'])->name('validar-registro');
    
    Route::post('/inicia-sesion',[LoginControLLer::class, 'login'])->name('inicia-sesion');
    
    Route::get('/logout',[LoginControLLer::class, 'logout' ])->name('logout');
    
        Route::resource('canchas', 
        CanchasController::class);
    
        Route::resource('arbitros', 
        ArbitrosController::class);
    
        Route::resource('reservas', 
        ReservasController::class);
    
        Route::resource('partidos', 
        PartidosController::class);
    
        Route::get('/dashboard', function () {
            return view('dashboard');
        })->name('dashboard');
