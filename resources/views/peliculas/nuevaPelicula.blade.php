@extends('layouts.app')



@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Agregar pelicula</div>
                    <div class="errores">
                      <ul>
                        @foreach($errors->all() as $error)
                        <li class="error">{{ $error }}</li>
                        @endforeach
                      </ul>

                    </div>
                    <div class="">


                        <form id="agregarPelicula" name="agregarPelicula" method="POST">
                          {{ csrf_field() }}
                            <div>
                                <label for="title">Titulo</label>
                                <input type="text" name="title" id="title" value="{{ old('title')}}"/>
                            </div>
                            <div>
                                <label for="rating">Rating</label>
                                <input type="text" name="rating" id="rating" value="{{ old('rating')}}" />
                            </div>
                            <div>
                                <label for="awards">Premios</label>
                                <input type="text" name="awards" id="awards" value="{{ old('awards')}}"/>
                            </div>
                            <div>
                                <label for="length">Duracion</label>
                                <input type="text" name="length" id="length" value="{{ old('length')}}"/>
                            </div>
                            <div>
                                <label for="genre_id">Duracion</label>
                                <select class="" name="genre_id">
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
                                <input type="date" name="release_date" value="{{ old('release_date')}"/>
                            </div>
                            <input type="submit" value="Agregar Pelicula" name="submit"/>
                        </form>
</div>
  </div>
</div>
</div>
</div>

@endsection
