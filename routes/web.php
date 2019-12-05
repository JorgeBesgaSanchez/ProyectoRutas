<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//la ruta raiz es localhost/proyecto
/*
Route::get('/', function () {
    return view('welcome');
});
*/

use App\Http\Controllers\PaginaController;

Route::get('/', function () {
    return view('inicio');
})->name('inicio');

Route::get('/deportes', function () {
    return view('paginas.deportes');
})->name('deportes');

Route::get('/datos', function () {
    return view('paginas.datos');
})->name('datos');

Route::get('/login', function () {
    return view('paginas.login');
})->name('login');

Route::get('/registro', function () {
    return view('paginas.registro');
})->name('registro');

Route::get('/senderos', function () {
    return view('paginas.senderos');
})->name('senderos');

Route::resource('paginas', 'PaginaController');
Route::post('login', 'PaginaController@entrar')->name('paginas.login');


Route::resource('tipo_marchas', 'TipoMarchaController'); // index, show
Route::resource('tipo_caminos', 'TipoCaminoController'); // index, show
Route::resource('dificultades', 'DificultadController'); // index, show
Route::resource('zonas', 'ZonaController'); // index, show
Route::resource('comunidades', 'ComunidadController'); // index, show
Route::resource('actividades', 'ActividadController'); // index, show
Route::resource('usuarios', 'UsuarioController'); // index, show
Route::resource('rutas', 'RutaController'); // index, show
Route::resource('recorren', 'RecorreController'); // index, show
Route::resource('provincias', 'ProvinciaController'); // index, show
Route::resource('toponimos', 'ToponimoController'); // index, show
Route::resource('pasan', 'PasaPorController'); // index, show
Route::resource('situadas', 'SituadaController'); // index, show
Route::resource('inscriben', 'InscribeController'); // index, show
Route::resource('posts', 'PostController'); // index, show
