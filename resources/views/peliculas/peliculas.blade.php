@extends('layouts.app')



@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    {{ $genre->name or 'Todas la peliculas' }}
                    <div class="">
                      <form method="get" action="/agregarPelicula">
                           <button type="submit">Agregar Pelicula</button>
                      </form>
                    </div>
                  </div>

                <div class="panel-body">


    @forelse($peliculas as $pelicula)
  		<div><a href="peliculas/{{ $pelicula->id}}">{{ $pelicula->title}}</a></div>
  	@empty
  		<div>No hay películas</div>
  	@endforelse




    <!-- <?php foreach ($peliculas as $pelicula): ?> -->
      <!-- <?php echo $pelicula ?> -->
  <!-- <div class=""> -->
    <!-- <?php endforeach; ?> -->

{{$peliculas->links()}}

  </div>
</div>
</div>
</div>
</div>
@endsection
