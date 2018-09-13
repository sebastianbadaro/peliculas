@extends('layouts.app')



@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Pelicula</div>

                <div class="panel-body">
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

  </div>
  </div>
  </div>
  </div>
  </div>

@endsection
