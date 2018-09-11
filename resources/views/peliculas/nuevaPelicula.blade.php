@extends('layout')


@section('title')
Agregar Pelicula
@endsection



@section('body')

<div class="errores">
  <ul>
    @foreach($errors->all() as $error)
    <li class="error">{{ $error }}</li>
    @endforeach
  </ul>

</div>

    <form id="agregarPelicula" name="agregarPelicula" method="POST">
      {{ csrf_field() }}
        <div>
            <label for="titulo">Titulo</label>
            <input type="text" name="titulo" id="titulo" value="{{ old('titulo')}}"/>
        </div>
        <div>
            <label for="rating">Rating</label>
            <input type="text" name="rating" id="rating" value="{{ old('rating')}}" />
        </div>
        <div>
            <label for="premios">Premios</label>
            <input type="text" name="premios" id="premios" value="{{ old('premios')}}"/>
        </div>
        <div>
            <label for="duracion">Duracion</label>
            <input type="text" name="duracion" id="duracion" value="{{ old('duracion')}}"/>
        </div>
        <div>
            <label for="genre_id">Duracion</label>
            <select class="" name="gnre_id">
            @foreach($genres as $genre)

              <option
              @if($genre->id == old('genre_id'))
              selected
              @endif

              value="{{$genre->id}}">{{$genre->name}}</option>


          	@endforeach
              </select>
        </div>
        <div>
            <label>Fecha de Estreno</label>
            <select name="dia">
                <option value="">Dia</option>
                <?php for ($i=1; $i < 32; $i++) { ?>
                    <option

                    @if($i == old('dia'))
                    selected
                    @endif

                     value="<?php echo $i; ?>" onload=""><?php echo $i; ?></option>
                <?php } ?>
            </select>

            <select name="mes">
                <option

                          value="">Mes</option>
                <?php for ($i=1; $i < 13; $i++) { ?>
                    <option

                    @if($i == old('mes'))
                    selected
                    @endif

                     value="<?php echo $i; ?>"><?php echo $i; ?></option>
                <?php } ?>
            </select>
            <select name="anio">
                <option  value="">Anio</option>
                <?php for ($i=1900; $i < 2017; $i++) { ?>
                    <option

                    @if($i == old('anio'))
                    selected
                    @endif

                    value="<?php echo $i; ?>"><?php echo $i; ?></option>
                <?php } ?>
            </select>
        </div>
        <input type="submit" value="Agregar Pelicula" name="submit"/>
    </form>



@endsection
