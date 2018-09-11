  {{ csrf_field() }}

<div>
    <label for="nombre">Nombre</label>
    <input type="text" name="first_name" id="nombre" value="{{  $actor->first_name, old('nombre')}}"/>
</div>
<div>
    <label for="apellido">Apellido</label>
    <input type="text" name="last_name" id="apellido" value="{{ old('apellido', $actor->last_name)}}" />
</div>
<div>
    <label for="rating">Rating</label>
    <input type="text" name="rating" id="rating" value="{{ old('rating',$actor->rating)}}"/>
</div>

  <div >
      <label>Pelicula Favorita</label>
    <select name="favorite_movie_id">
      @foreach($peliculas as $pelicula)
        <option value="{{ old('favorite_movie_id', $pelicula->id) }}"
          @if($pelicula->id == old('favorite_movie_id'))
            selected
          @endif
          >{{ $pelicula->title }}</option>
      @endforeach
    </select>
  </div>
