@extends('layout')

@section('title')
ACTORES
@endsection

@section('body')

<form class="" action="/actores/buscar" method="post">
    {{ csrf_field() }}
  <input type="text" name="searchstring" value="">
  <input type="submit" name="" value="Buscar">
</form>
<form method="get" action="/actores">
    <button type="submit">Limpiar</button>
</form>


@forelse($actores as $actor)
  <div>
<a href="/actores/{{ $actor->id }}">{{ $actor->first_name }} {{ $actor->last_name }}</a>

<form class="" action="actores/{{ $actor->id }}/eliminar" method="post">
  {{ csrf_field() }}
  {{ method_field('delete') }}
    <button type="submit">Eliminar</button>
</form>

</div>
@empty
  <div>No hay películas</div>
@endforelse

{{$actores->links()}}

@endsection
