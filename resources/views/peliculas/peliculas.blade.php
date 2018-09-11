@extends('layout')

@section('title')
Peliculas
@endsection

@section('body')

{{ $genre->name or 'Todas la peliculas' }}

    @forelse($peliculas as $pelicula)
  		<div><a href="peliculas/{{ $pelicula->id}}">{{ $pelicula->title}}</a></div>
  	@empty
  		<div>No hay películas</div>
  	@endforelse




    <!-- <?php foreach ($peliculas as $pelicula): ?> -->
      <!-- <?php echo $pelicula ?> -->
  <!-- <div class=""> -->
    <!-- <?php endforeach; ?> -->

@endsection
