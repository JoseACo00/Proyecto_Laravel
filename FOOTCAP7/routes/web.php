<?php

use App\Http\Controllers\CanchasController;
use App\Http\Controllers\ClientesController;
use Illuminate\Support\Facades\Route;

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
    return view('Inicio');
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

Route::resource('canchas', 
    CanchasController::class);
    
Route::get('/clientes',
    [ClientesController::class, 'index']);

Route::get('/clientes/create',
    [ClientesController::class, 'create']);
    
Route::get('/contacto',function () {
    return view('contacto');
});



