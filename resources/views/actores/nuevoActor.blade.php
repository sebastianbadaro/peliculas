@extends('layout')


@section('title')
Agregar Actor
@endsection



@section('body')

<div class="errores">
  <ul>
    @foreach($errors->all() as $error)
    <li class="error">{{ $error }}</li>
    @endforeach
  </ul>

</div>

    <form id="agregarActor" name="agregarActor" method="POST">

        @include('actores._campos')

        <input type="submit" value="Agregar Actor" name="submit"/>
    </form>



@endsection
