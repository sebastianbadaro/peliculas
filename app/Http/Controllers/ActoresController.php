<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Actor;
use App\Movie;

class ActoresController extends Controller
{
    public function directory()
    {
      $actores = Actor::paginate(10);
      return view('actores.actores',compact('actores'));
    }

    public function show($id)
    {
      $actor = Actor::findorfail($id);
      return view('actores.actor',compact('actor'));
    }


    public function search(Request $request)
    {
      $search = '%'.$request->input('searchstring').'%';

     $actores = Actor::where('first_name','like',$search)->orwhere('last_name','like',$search)->get();
      return view('actores.actores',compact('actores'));

    }

    public function nuevoActor(Request $request)
    {
      $actor = new Actor();
      $peliculas = Movie::all();
      return view('actores.nuevoActor',compact('peliculas','actor'));
    }

    public function agregarActor(Request $request)
    {
      $this->validate(
          $request,
          [
              'first_name' => 'required|max:80',
              'last_name' => 'required|max:80',
              'rating' => 'required|max:10|min:0|numeric',
              'favorite_movie_id' => 'required|exists:movies,id'

          ],
          [
             'titulo.required' => 'Eh loco, completá el titulo'
          ],
          [
              'titulo' => 'tiiitulo'
          ]
      );//no entiendo el fucnionamiento de esto.Cuando manda los errores??

      $actor = new Actor;
      $actor->fill($request->all());
      $actor->save();

      return redirect('/actores');
    }

    public function edit(Actor $actor) //Inyeccion de dependencias? como usar?
    {

      $peliculas = Movie::all();
      return view('actores.editarActor',compact('peliculas','actor'));
    }

    public function update(Request $request,$id)
    {

      $this->validate(
          $request,
          [
              'first_name' => 'required|max:80',
              'last_name' => 'required|max:80',
              'rating' => 'required|max:10|min:0|numeric',
              'favorite_movie_id' => 'required|exists:movies,id'

          ],
          [

          ],
          [

          ]
      );//no entiendo el fucnionamiento de esto.Cuando manda los errores??

      $actor =  Actor::findorfail($id);
      $actor->fill($request->all());
      $actor->save();
      return redirect('/actores/'.$id);
    }

    public function destroy($id)
    {
      $actor =  Actor::findorfail($id);
      $actor->delete();
      return redirect('/actores'); 
    }
}
