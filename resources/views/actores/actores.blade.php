@extends('layouts.app')

@section('title')
ACTOR
@endsection

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Actores</div>
                <div class="">
                  <form class="" action="/actores/agregar" method="post">
                    {{ csrf_field() }}
                    {{ method_field('get') }}
                      <button type="submit">Agregar actor</button>
                  </form>
                </div>
                <div class="panel-body">

                <form class="" action="/actores/buscar" method="post">
                    {{ csrf_field() }}
                    <input type="text" name="searchstring" value="">
                    <input type="submit" name="" value="Buscar">
                </form>
                <form method="get" action="/actores">
                     <button type="submit">Limpiar</button>
                </form>


                @forelse($actores as $actor)
                  <div class="row">
                    <div class="col-xs-6 col-sm-4">
                      <a href="/actores/{{ $actor->id }}">{{ $actor->first_name }} {{ $actor->last_name }}</a>
                    </div>
                    <div class="col-xs-2 col-sm-2">
                      <form class="" action="actores/{{ $actor->id }}/eliminar" method="post">
                        {{ csrf_field() }}
                        {{ method_field('delete') }}
                          <button type="submit">Eliminar</button>
                      </form>
                    </div>
                    <div class="col-xs-2 col-sm-2">
                      <form class="" action="actores/{{ $actor->id }}/editar" method="post">
                        {{ csrf_field() }}
                        {{ method_field('get') }}
                          <button type="submit">Editar</button>
                      </form>
                    </div>

                </div>
                @empty
                  <div>No hay películas</div>
                @endforelse

              {{$actores->links()}}
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection
