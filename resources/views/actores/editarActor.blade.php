@extends('layout')


@section('title')
Editar Actor
@endsection



@section('body')

<div class="errores">
  <ul>
    @foreach($errors->all() as $error)
    <li class="error">{{ $error }}</li>
    @endforeach
  </ul>

</div>

    <form  method="POST">
      	{{ method_field('put') }}

      @include('actores._campos')



        <input type="submit" value="Editar Actor" name="submit"/>
    </form>



@endsection
