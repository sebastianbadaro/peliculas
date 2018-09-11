@extends('layout')

@section('title')
Peliculas
@endsection

@section('body')

  		<div>{{ $pelicula->title}}</div>
  		<div>{{ $pelicula->rating}}</div>
  		<div>{{ $pelicula->awards}}</div>
      <div>{{ $genre->name}}</div>
      @foreach($actores as $actor)
      <div>{{ $actor->first_name}} {{$actor->last_name }}</div>
      @endforeach

@endsection
