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

Route::resource('Colegios', ColegiosController::class, ['only' =>['index', 'show']]);
Route::resource('Comunidades', ComunidadesController::class, ['only' =>['index', 'show']]);
Route::resource('Eventos', EventosController::class, ['only' =>['index', 'show']]);
Route::resource('Hospitales', HospitalesController::class, ['only' =>['index', 'show']]);
Route::resource('Municipios', MunicipiosController::class, ['only' =>['index', 'show']]);
Route::resource('Provincias', ProvinciasController::class, ['only' =>['index', 'show']]);
Route::resource('Restaurantes', RestaurantesController::class, ['only' =>['index', 'show']]);
Route::resource('Usuarios', UsuariosController::class, ['except' => ['destroy']]);
Route::resource('Viviendas', ViviendasController::class, ['only' =>['index', 'show']]);

Route::get('Usuarios/existeUsuario/{usuario}', [UsuariosController::class, 'existeUsuario']);
Route::get('Usuarios/checkPassword/{usuario}/{password}', [UsuariosController::class, 'checkPassword']);
Route::get('Usuarios/isAdmin/{usuario}', [UsuariosController::class, 'isAdmin']);
