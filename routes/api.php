<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ColegiosController;
use App\Http\Controllers\ComunidadesController;
use App\Http\Controllers\EventosController;
use App\Http\Controllers\HospitalesController;
use App\Http\Controllers\MunicipiosController;
use App\Http\Controllers\ProvinciasController;
use App\Http\Controllers\RestaurantesController;
use App\Http\Controllers\UsuariosController;
use App\Http\Controllers\ViviendasController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::resource('Colegios', ColegiosController::class);
Route::resource('Comunidades', ComunidadesController::class);
Route::resource('Eventos', EventosController::class);
Route::resource('Hospitales', HospitalesController::class);
Route::resource('Municipios', MunicipiosController::class);
Route::resource('Provincias', ProvinciasController::class);
Route::resource('Restaurantes', RestaurantesController::class);
Route::resource('Usuarios', UsuariosController::class);
Route::resource('Viviendas', ViviendasController::class);
