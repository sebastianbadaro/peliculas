@extends('layouts.app')



@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Actor</div>

                <div class="panel-body">
                  <div>Nombre: {{ $actor->first_name }} {{ $actor->last_name }}</div>
                  <div>Rating: {{ $actor->rating}}</div>
                </div>
            </div>
        </div>
      </div>
</div>



@endsection
