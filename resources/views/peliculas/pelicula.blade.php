@extends('layouts.app')



@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Pelicula</div>

                <div class="panel-body">
  		<div>{{ $pelicula->title}}</div>
  		<div>{{ $pelicula->rating}}</div>
  		<div>{{ $pelicula->awards}}</div>
      <div>{{ $genre->name}}</div>
      @foreach($actores as $actor)
      <div>{{ $actor->first_name}} {{$actor->last_name }}</div>
      @endforeach
    </div>
  </div>
  </div>
  </div>
  </div>
@endsection
