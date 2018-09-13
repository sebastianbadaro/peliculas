@extends('layouts.app')



@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Actor</div>

                <div class="panel-body">

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
  </div>
</div>
</div>
</div>
</div>


@endsection
