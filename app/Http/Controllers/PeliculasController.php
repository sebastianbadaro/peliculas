<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;
use App\Genre;

class PeliculasController extends Controller
{

    public $peliculas;

    function __construct()
    {
      $this->peliculas = [
        1 => "Toy Story",
        2 => "Buscando a Nemo",
        3 => "Avatar",
        4 => "Star Wars: Episodio V",
        5 => "Up",
        6 => "Mary and Max"
      ];
    }

public function MostrarPeliculas()
{
  $peliculas = Movie::paginate(10);
  return  view('peliculas.peliculas', compact('peliculas'));	// Envia a una vista con el nombre peliculas el parametro peiculas
}

    public function BuscarPeliculaNombre($nombre)
    { $peliculas=[];
      if(in_array($nombre,$this->peliculas))
      { $peliculas[]=$nombre;
      }
      return view('peliculas.pliculas',compact('pliculas'));
    }

    public function BuscarPeliculaId($id)
    {

      $pelicula=Movie::findorfail($id);
      $genre=$pelicula->genre;
      $actores=$pelicula->actors;
      return view('peliculas.pelicula',compact('pelicula','genre','actores'));
    }

    public function AgregarPelicula(Request $request)
    {
      $this->validate(
          $request,
          [
              'titulo' => 'required|max:60',
              'rating' => 'required|max:10|min:0|numeric',
              'premios' => 'required|max:10|min:0|numeric',
              'duracion' => 'required|max:999|numeric',
              'mes' => 'required|max:12|min:1 |numeric',
              'anio' => 'required|numeric|min:1900',
              'dia' => 'required|max:31| min:1|numeric'
          ],
          [
             'titulo.required' => 'Eh loco, completá el titulo'
          ],
          [
              'titulo' => 'tiiitulo'
          ]
      );//no entiendo el fucnionamiento de esto.Cuando manda los errores??


      return "Pelicula agregada con exito.";
    }

    public function NuevaPelicula()
    {
      $genres = Genre::all();
      return view('peliculas.nuevaPelicula',compact('genres'));
    }
}
