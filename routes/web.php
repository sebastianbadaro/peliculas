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

// -PELICULAS

Route::get('/peliculas/{id}', 'PeliculasController@BuscarPeliculaId');

Route::get('/peliculas/', 'PeliculasController@MostrarPeliculas');

Route::get('/peliculas/buscar/{nombre}', 'PeliculasController@BuscarPeliculaNombre');

Route::get('/agregarPelicula', 'PeliculasController@NuevaPelicula');

Route::post('/agregarPelicula', 'PeliculasController@AgregarPelicula');

// -ACTORES


Route::get('/actores/{actor}/editar', 'ActoresController@edit');

Route::put('/actores/{id}/editar', 'ActoresController@update');

Route::get('/actores/agregar', 'ActoresController@nuevoActor');

Route::post('/actores/agregar', 'ActoresController@agregarActor');

Route::get('/actores/', 'ActoresController@directory');

Route::get('/actores/{id}', 'ActoresController@show');

Route::post('/actores/buscar', 'ActoresController@search');

Route::delete('/actores/{id}/eliminar', 'ActoresController@destroy');

// -GENRE

Route::get('/genres/{id}', 'GenresController@show');



Route::get('/', function () {
    return view('welcome');
});

Route::get('home', function () {  return "Creé mi primer ruta en Laravel";});

Route::get('resultado/{numero}/{numero2?}', function ($numero = null,$numero2 = null) {

if ($numero%2==0) {
  return "Par";
}
  return "Impar";
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
