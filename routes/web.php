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


Route::resource('tipo_marchas', 'TipoMarchaController'); 
Route::resource('tipo_caminos', 'TipoCaminoController'); 
Route::resource('dificultades', 'DificultadController'); 
Route::resource('zonas', 'ZonaController'); 
Route::resource('comunidades', 'ComunidadController'); 
Route::resource('actividades', 'ActividadController'); 
Route::resource('usuarios', 'UsuarioController'); 
Route::resource('rutas', 'RutaController'); 
Route::resource('recorren', 'RecorreController'); 
Route::resource('provincias', 'ProvinciaController'); 
Route::resource('toponimos', 'ToponimoController'); 
Route::resource('pasan', 'PasaPorController'); 
Route::resource('situadas', 'SituadaController'); 
Route::resource('inscriben', 'InscribeController'); 
Route::resource('posts', 'PostController'); 
