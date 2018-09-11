<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Genre;

class GenresController extends Controller
{
  public function show($id)
  {
    $genre = Genre::findorfail($id);
    $peliculas = $genre->movies;

    return view('peliculas.peliculas',compact('peliculas','genre')); // no hace las relaciones...
  }
}
